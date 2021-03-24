<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $res = Http::get('http://status.proxypanel.io/statsapi.php');
        $citys = array();
        $types = array(array("Monthly","$175"), array("Weekly", "$75"), array("Daily", "$20"), array("One hour", "$10"));

        $userId = session('id');

        foreach ($res->json() as $r) {
            array_push($citys, $r[0]);
        }
        return view('mat', compact('citys', 'types', 'userId'));
    }

    public function login()
    {
        
    }
}
