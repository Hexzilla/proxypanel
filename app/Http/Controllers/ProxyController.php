<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;

class ProxyController extends Controller
{
    function addProxy(Request $request) {
        $option = $request->option;
        $payment = $request->payment;
        $nickName = $request->nickName;
        $rotation = $request->rotation;

        var_dump('option '.$option);echo('<br>');
        var_dump('payment '.$payment);echo('<br>');
        var_dump('nickName '.$nickName);echo('<br>');
        var_dump('rotation '.$rotation);echo('<br>');
        var_dump('ok');
    }
}
