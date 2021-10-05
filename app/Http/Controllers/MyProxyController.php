<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Port;

class MyProxyController extends Controller
{
    function show() {
        $user = Auth::user();
        return view('location', compact('locations'));
    }
}
