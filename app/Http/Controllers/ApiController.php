<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;

class ApiController extends Controller
{
    function show() {
        $user = Auth::user();
        $apiKey = $user->api_key;

        return view('api', compact('apiKey'));
    }

    function change() {
        $first = Str::random(32);
        $second = Str::random(32);
        $newKey = $first.':'.$second;
        
        $user = Auth::user();
        $user->api_key = $newKey;
        User::find($user->id)->update(['api_key'=> $newKey]);

        return redirect()->back();
    }
}
