<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;

class DashController extends Controller
{
    function myproxies() {
        $port = Port::on('mysqlSecondConnection')->all();
        var_dump($port);
        // return view('myproxies');
    }

}
