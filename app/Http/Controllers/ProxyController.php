<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;
use DateTime;
use DateInterval;

class ProxyController extends Controller
{
    function show() {
        $ports = Port::all();
        return view('myproxies', compact('ports'));
    }

    function showBuy() {
        $locations = ["Denver, US", "Los_Angeles, US", "Dallas, US", "New_York, US", "Atlanta, US", "Seattle, US", "Orlando, US", "Philadelphia, US",
                        "Portland, US", "Helena, US", "Chicago, US", "Birmingham, US"];
        return view('buy', compact('locations'));
    }

    public function addProxy(Request $request) {
        $option = $request->option;
        $payment = $request->payment;

        $nickName = $request->nickName;
        $rotation = $request->rotation;
        $password = self::generatePassword();
        $user = session('username');
        $city = 'atlanta';
        $paidTill = self::getPaidTill($option);

        $port = new Port;
        $port->username = $user;
        $port->pass = $password;
        $port->paidtill = $paidTill;
        $port->groupname = $request->nickName;
        $port->city = $city;
        $port->rotation = $rotation ? $rotation : 0;
        $port->save();

        return redirect()->back();
    }
    
    function generatePassword() { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
    
        for ($i = 0; $i < 10; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
    
        return $randomString; 
    }

    function getPaidTill($option) {
        $date = new DateTime();
        if ($option == 'monthly') {
            $date->add(new DateInterval('P1M'));
        } else if ($option == 'weekly') {
            $date->add(new DateInterval('P7D'));
        } else if ($option == 'daily') {
            $date->add(new DateInterval('P1D'));
        } else if ($option == 'hour') {
            $date->add(new DateInterval('P1H'));
        }
        return $date->format('Y-m-d H:i:s');
    }
}
