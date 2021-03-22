<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Port;

class IpController extends Controller
{
    function changeIp(Request $request) {
        // $res = Http::get('http://phones.proxypanel.io:1080/change?u='.$request->userInfo);
        // var_dump($request->userInfo.' / '.$request->portId);
        
        $port = Port::find($request->portId);
        $port->lastchangeipdate = date('Y-m-d H:i:s');
        $port->save();

        return redirect()->back();
    }

    function changeAuthIP(Request $request) {
        $ip = $request->ip;
        $id = $request->id;

        $port = Port::find($id);
        $port->fwdauthips = $ip;
        $port->save();

        return redirect()->back();
    }
}
