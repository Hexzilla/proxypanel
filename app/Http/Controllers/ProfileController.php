<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function show(Request $request) {
        $userInfo = Auth::user();

        return view('profile', compact('userInfo'));
    }

    public function changeUser(Request $request) {
        //$userId = session('id');

        $user = Auth::user();
        $user->name = $request->userName;
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->skype_id = $request->skype;
        try {
            $user->save();
        } catch (Exception $e) {
            echo '0';
            exit;
        }
        echo '1';
    }
    
}
