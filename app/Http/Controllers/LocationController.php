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
            $temp['last'] = $p->lastchangecitydate;
            $temp['load'] = self::getLocationLoad($res->json(), $p->city);
            array_push($locations, $temp);
        }
        return view('location', compact('locations'));
    }   

    function showLocations(Request $request) {
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        $locations = array();
        foreach ($res->json() as $r) {
            $temp['location'] = $r[0];
            $temp['load'] = (int)(($r[1] + $r[2] + $r[3]) * 100 / $r[4]);

            array_push($locations, $temp);
        }
        return view('all-locations', compact('locations'));
    }

    function allLocation(Request $request) {
        $id = $request->id;
        
        $port = Port::find($id);

        $last = $port->lastchangecitydate;
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        $locations = array();
        foreach ($res->json() as $r) {
            $temp['location'] = $r[0];
            $temp['load'] = (int)(($r[1] + $r[2] + $r[3]) * 100 / $r[4]);

            array_push($locations, $temp);
        }
        $city = $port->city;
        return view('location_', compact('locations', 'id', 'last', 'city'));
    }

    function refreshAllLocation(Request $request) {
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        $locations = array();
        foreach ($res->json() as $r) {
            $temp['location'] = $r[0];
            $temp['load'] = (int)(($r[1] + $r[2] + $r[3]) * 100 / $r[4]);

            array_push($locations, $temp);
        }
        
        $output = "";
        if (count($locations)) {
            foreach ($locations as $m) {
                $output .=  "<tr>
                    <td class='text-center' style='vertical-align: middle'>
                        {$m['location']}
                    </td>
                    <td class='text-center' style='vertical-align: middle'>
                        <input type='hidden' value={$m['location']}>";
                    
                    if ($m['load'] <= 80 ) {
                        $output .="<button class='btn btn-sm ripple btn-success mb-1 connectBtn' >Connect</button>";
                    }
                    elseif ($m['load'] < 100) {
                        $output .= "<button class='btn btn-sm ripple btn-warning mb-1 connectBtn' style='color: white' >Connect</button>";
                    }                            
                    else {
                        $output .= "<button class='btn btn-sm ripple btn-danger mb-1 connectBtn' >Connect</button>";
                    }
                    $output .= "</td>
                    <td class='text-center' style='vertical-align: middle'>
                        <div class='progress mg-b-10'>";
                        if ($m['load'] <= 80 ) {
                            $output .= "<div aria-valuemax='100' aria-valuemin='0' aria-valuenow='60' class='progress-bar progress-bar-lg bg-success ht-20' role='progressbar' style='width: {$m['load']}%'>
                                {$m['load']}
                            </div>";
                        } elseif ($m['load'] < 100)
                            $output .= "<div aria-valuemax='100' aria-valuemin='0' aria-valuenow='60' class='progress-bar progress-bar-lg bg-warning ht-20' role='progressbar' style='width: {$m['load']}%'>
                                {$m['load']}
                            </div>";
                        else {
                            $output .= "<div aria-valuemax='100' aria-valuemin='0' aria-valuenow='60' class='progress-bar progress-bar-lg bg-danger ht-20' role='progressbar' style='width: {$m['load']}%'>
                                {$m['load']}
                            </div>";
                        }
                    $output .= "</div>
                    </td>
                </tr>";
            }
        } else {
            $output = "<tr>
                    <td colspan='20' class='text-center'>No data</td>
                </tr>";
        }
        echo $output;
    }

    function refreshLocation(Request $request) {
        $id = $request->id;
        
        $port = Port::find($id);

        $last = $port->lastchangecitydate;
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        $locations = array();
        foreach ($res->json() as $r) {
            $temp['location'] = $r[0];
            $temp['load'] = (int)(($r[1] + $r[2] + $r[3]) * 100 / $r[4]);

            array_push($locations, $temp);
        }
        $city = $port->city;
        
        $output = "";
        if (count($locations)) {
            foreach ($locations as $m) {
                $output .=  "<tr>
                    <td class='text-center' style='vertical-align: middle'>
                        {$m['location']}
                    </td>
                    <td class='text-center' style='vertical-align: middle'>
                        <input type='hidden' value={$m['location']}>";
                    
                    if ($m['load'] <= 80 ) {
                        $output .="<button class='btn btn-sm ripple btn-success loadingBtn' disabled type='button'><span aria-hidden='true' class='spinner-border spinner-border-sm' role='status'></span> Saving...</button>
                        <button class='btn btn-sm ripple btn-success mb-1 connectBtn' date='{$last}' city='{$city}'>Connect</button>";
                    }
                    elseif ($m['load'] < 100) {
                        $output .= "<button class='btn btn-sm ripple btn-warning loadingBtn' style='color: white' disabled type='button'><span aria-hidden='true' class='spinner-border spinner-border-sm' role='status'></span> Saving...</button>
                        <button class='btn btn-sm ripple btn-warning mb-1 connectBtn' style='color: white' date='{$last}' city='{$city}'>Connect</button>";
                    }                            
                    else {
                        $output .= "<button class='btn btn-sm ripple btn-danger loadingBtn' disabled type='button'><span aria-hidden='true' class='spinner-border spinner-border-sm' role='status'></span> Saving...</button>
                        <button class='btn btn-sm ripple btn-danger mb-1 connectBtn' date='{$last}' city='{$city}'>Connect</button>";
                    }
                    $output .= "</td>
                    <td class='text-center' style='vertical-align: middle'>
                        <div class='progress mg-b-10'>";
                        if ($m['load'] <= 80 ) {
                            $output .= "<div aria-valuemax='100' aria-valuemin='0' aria-valuenow='60' class='progress-bar progress-bar-lg bg-success ht-20' role='progressbar' style='width: {$m['load']}%'>
                                {$m['load']}
                            </div>";
                        } elseif ($m['load'] < 100)
                            $output .= "<div aria-valuemax='100' aria-valuemin='0' aria-valuenow='60' class='progress-bar progress-bar-lg bg-warning ht-20' role='progressbar' style='width: {$m['load']}%'>
                                {$m['load']}
                            </div>";
                        else {
                            $output .= "<div aria-valuemax='100' aria-valuemin='0' aria-valuenow='60' class='progress-bar progress-bar-lg bg-danger ht-20' role='progressbar' style='width: {$m['load']}%'>
                                {$m['load']}
                            </div>";
                        }
                    $output .= "</div>
                    </td>
                </tr>";
            }
        } else {
            $output = "<tr>
                    <td colspan='20' class='text-center'>No data</td>
                </tr>";
        }
        echo $output;
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
        $port->lastchangecitydate = date('Y-m-d H:i:s');

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
        $port->lastchangecitydate = date('Y-m-d H:i:s');

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
