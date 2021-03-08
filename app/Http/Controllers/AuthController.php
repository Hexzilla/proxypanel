<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function signup(Request $request) {
        $user = new User;
        $user->username = $request->name;
        $user->email = $request->email;
        $user->skype_id = $request->skype;
        $user->password = self::make_password($request->password);
        $user->save();
        return redirect('/signin');
    }

    public function signin(Request $request) {
        return view('signin');
    }

    public function signupView(Request $request) {
        return view('signup');
    }

    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        if (!$user) {
            echo '0';
            exit;
        }

        $correct = self::verify_Password($user->password, $password);
        if ($correct) {
            $request->session()->put('email', $email);
            $request->session()->put('id', $user->id);
            $request->session()->put('username', $user->username);
            echo '1';
        } else {
            echo '0';
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/');
    }

    private function make_password($password) {
        $algorithm = "pbkdf2_sha256";
        $iterations = 10000;

        $newSalt = random_bytes(6);
        $newSalt = base64_encode($newSalt);

        $hash = hash_pbkdf2("SHA256", $password, $newSalt, $iterations, 0, true);
        $toDBStr = $algorithm ."$". $iterations ."$". $newSalt ."$". base64_encode($hash);

        return $toDBStr;
    }

    private function verify_Password($dbString, $password) {
        $pieces = explode("$", $dbString);

        $iterations = $pieces[1];
        $salt = $pieces[2];
        $old_hash = $pieces[3];

        $hash = hash_pbkdf2("SHA256", $password, $salt, $iterations, 0, true);
        $hash = base64_encode($hash);

        if ($hash == $old_hash) {
            // login ok.
            return 1;
        }
        else {
            //login fail
            return 0;
        }
    }
}
