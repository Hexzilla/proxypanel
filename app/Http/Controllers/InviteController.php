<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\User;

class InviteController extends Controller
{
    public function show(Request $request) {
        $userInfo = Auth::user();
        return view('invite', compact('userInfo'));
    }
}
