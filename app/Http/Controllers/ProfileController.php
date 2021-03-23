<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(Request $request) {
        $userId = session('id');
        $userInfo = User::find($userId);

        return view('profile', compact('userInfo'));
    }

    public function changeUser(Request $request) {
        $userId = session('id');

        $user = User::find($userId);
        $user->username = $request->userName;
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
