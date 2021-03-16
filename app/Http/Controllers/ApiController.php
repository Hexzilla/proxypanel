<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

class ApiController extends Controller
{
    function show() {
        $id = session('id');
        $user = User::find($id);
        $apiKey = $user->api_key;

        return view('api', compact('apiKey'));
    }

    function change() {
        $first = Str::random(32);
        $second = Str::random(32);
        $newKey = $first.':'.$second;
        
        $id = session('id');
        $user = User::find($id);
        $user->api_key = $newKey;
        $user->save();

        return redirect()->back();
    }
}
