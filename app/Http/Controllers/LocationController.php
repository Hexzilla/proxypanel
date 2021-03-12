<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Port;

class LocationController extends Controller
{
    function show() {
        $ports = Port::where('username', session('username'))->get();
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        
        $locations = array();
        foreach($ports as $p) {
            $temp['id'] = $p->id;
            $temp['name'] = $p->username.'.'.$p->groupname;
            $temp['location'] = $p->city;
            $temp['load'] = self::getLocationLoad($res->json(), $p->city);
            array_push($locations, $temp);
        }
        return view('location', compact('locations'));
    }   

    function allLocation(Request $request) {
        $id = $request->id;
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        $locations = array();
        foreach ($res->json() as $r) {
            $temp['location'] = $r[0];
            $temp['load'] = (int)(($r[1] + $r[2] + $r[3]) * 100 / $r[4]);
            array_push($locations, $temp);
        }
        return view('location_', compact('locations', 'id'));
    }

    function getLocationLoad($all, $location) {
        $ret = 0;
        foreach($all as $r) {
            if ($r[0] == $location) {
                $ret = ($r[1] + $r[2] + $r[3]) / $r[4];
            }
        }
        return (int)($ret * 100);
    }

    function changeLocation(Request $request) {
        $id = $request->id;
        $location = $request->location;

        $port = Port::find($id);
        $port->city = $location;

        try {
            $port->save();
        } catch (Exception $e) {
            echo '0';
            exit;
        }
        echo '1';
    }
    
    function randomLocation(Request $request) {
        $id = $request->id;
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        $port = Port::find($id);
        $port->city = self::getLeastLoad($res->json(), $port->city);
        try {
            $port->save();
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    function getLeastLoad($res, $own) {
        $locations = array();
        $loads = array();

        foreach($res as $r) {
            if ($r[0] == $own)
                continue;
            $temp['name'] = $r[0];
            $temp['load'] = (int)(($r[1] + $r[2] + $r[3]) * 100 / $r[4]);
            array_push($loads, (int)(($r[1] + $r[2] + $r[3]) * 100 / $r[4]));
            array_push($locations, $temp);
        }
        $min = min($loads);

        $name = '*';
        foreach($locations as $v) {
            if ($v['load'] == $min) {
               $name = $v['name'];
               break;
            }
        }

        return $name;
    }
}
