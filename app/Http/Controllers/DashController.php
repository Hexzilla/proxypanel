<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    function myproxies() {
        var_dump('ok');
        return view('myproxies');
    }

}
