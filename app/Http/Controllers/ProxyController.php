<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;
use DateTime;
use DateInterval;

class ProxyController extends Controller
{
    function addProxy(Request $request) {
        $option = $request->option;
        $payment = $request->payment;

        $nickName = $request->nickName;
        $rotation = $request->rotation;
        $password = self::generatePassword();
        $user = session('username');
        $city = 'atlanta';
        $paidTill = self::getPaidTill($option);

        var_dump('option '.$option);echo('<br>');
        var_dump('payment '.$payment);echo('<br>');

        var_dump('nickName '.$nickName);echo('<br>');
        var_dump('rotation '.$rotation);echo('<br>');
        var_dump('password '.$password);echo('<br>');
        var_dump('rotation '.$rotation);echo('<br>');
        var_dump('user '.$user);echo('<br>');
        var_dump('city '.$city);echo('<br>');
        var_dump('paidTill '.$paidTill);echo('<br>');
        var_dump('cur '.date('Y-m-d H:i:s'));echo('<br>');
    }
    
    function generatePassword() { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
    
        for ($i = 0; $i < 10; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
    
        return $randomString; 
    }

    function getPaidTill($option) {
        $date = new DateTime();
        if ($option == 'monthly') {
            $date->add(new DateInterval('P1M'));
        } else if ($option == 'weekly') {
            $date->add(new DateInterval('P7D'));
        } else if ($option == 'daily') {
            $date->add(new DateInterval('P1D'));
        } else if ($option == 'hour') {
            $date->add(new DateInterval('P1H'));
        }
        return $date->format('Y-m-d H:i:s');
    }
}
