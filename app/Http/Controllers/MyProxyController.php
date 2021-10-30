<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Port;
use DateTime;

class MyProxyController extends Controller
{
    function show() {
        $user = Auth::user();
        $ports = Port::where('username', $user->name)->get();
        $now = new DateTime();
        $current = $now->format('Y-m-d H:i:s');
        $apiKey = $user->api_key;
        return view('myproxies', compact('ports', 'now', 'current', 'apiKey'));
    }
}
