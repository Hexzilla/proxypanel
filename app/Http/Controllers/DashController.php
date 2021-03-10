<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;

class DashController extends Controller
{
    function dashboard() {
        return view('dashboard');
    }

    function myproxies() {
        $ports = Port::all();
        return view('myproxies', compact('ports'));
    }

    function buy() {
        $locations = ["Denver, US", "Los_Angeles, US", "Dallas, US", "New_York, US", "Atlanta, US", "Seattle, US", "Orlando, US", "Philadelphia, US",
                        "Portland, US", "Helena, US", "Chicago, US", "Birmingham, US"];
        return view('buy', compact('locations'));
    }
    
    function location() {
        return view('location');
    }

    function profile() {
        return view('profile');
    }

    function api() {
        return view('api');
    }
}
