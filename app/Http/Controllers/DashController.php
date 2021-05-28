<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;
use DateTime;
use DateInterval;

class DashController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['verified']);
    }

    function dashboard()
    {
        $ports = Port::where('username', session('username'))->get();
        $now = new DateTime();
        $current = $now->format('Y-m-d H:i:s');
        return view('dashboard', compact('ports', 'now', 'current'));
    }
    
    function api()
    {
        return view('api');
    }
}
