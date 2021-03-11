<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;

class DashController extends Controller
{
    function dashboard() {
        return view('dashboard');
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
