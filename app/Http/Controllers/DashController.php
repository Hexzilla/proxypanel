<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;

class DashController extends Controller
{
    function myproxies() {
        $eloquentVersion = Port::on('mysqlSecondConnection')->get();
        dd($eloquentVersion);
        // return view('myproxies');
    }

}
