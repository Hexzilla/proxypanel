<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;

class DashController extends Controller
{
    function myproxies() {
        $ports = Port::all();
        return view('myproxies', compact('ports'));
    }

}
