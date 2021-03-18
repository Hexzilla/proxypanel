<?php 
    return [ 
        'client_id' => env('PAYPAL_CLIENT_ID','AWvQ6jZqqKX_rS8CpmIttCXxM9ooRPMh1Ch-qK1HxnpfVARXIO3w5QWVmeEpp0GWADJpsB9QXMYWTc2T'),
        'secret' => env('PAYPAL_SECRET','EAciRAXk5uHUCLyxIjJA6_NyRKJ6NGF9TQjFrj11NzpA0-zBaqH7rETR7TPtqA5MisG2aQaloy7-lxsI'),
        'settings' => array(
            'mode' => env('PAYPAL_MODE','sandbox'),
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path() . '/logs/paypal.log',
            'log.LogLevel' => 'ERROR'
        ),
    ];