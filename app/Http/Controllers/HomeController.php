<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Port;
use DateTime;
use DateInterval;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        // $userId = session('id');
        // $ports = Port::where('username', session('username'))->get();
        // $now = new DateTime();
        // $current = $now->format('Y-m-d H:i:s');
        // return view('first', compact('ports', 'now', 'current', 'userId'));
        
        $ports = Port::where('username', session('username'))->get();
        $now = new DateTime();
        $current = $now->format('Y-m-d H:i:s');
        return view('home-dashboard', compact('ports', 'now', 'current'));
    }

    public function login()
    {
        
    }
}
