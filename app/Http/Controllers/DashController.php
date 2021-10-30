<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //$this->middleware(['auth','verified']);
        //$this->middleware(['auth']);
    }

    function dashboard()
    {
        $user = Auth::user();
        $ports = Port::where('username', $user->name)->get();
        $now = new DateTime();
        $current = $now->format('Y-m-d H:i:s');
        $apiKey = $user->api_key;
        return view('dashboard', compact('ports', 'now', 'current', 'apiKey'));
    }
    
    function api()
    {
        return view('api');
    }
}
