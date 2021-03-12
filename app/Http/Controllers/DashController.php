<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;
use DateTime;
use DateInterval;

class DashController extends Controller
{
    function dashboard() {
        $ports = Port::where('username', session('username'))->get();
        $now = new DateTime();
        $current = $now->format('Y-m-d H:i:s');
        return view('dashboard', compact('ports', 'now', 'current'));
    }
    
    function profile() {
        return view('profile');
    }

    function api() {
        return view('api');
    }
}
