<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        // 'username'    => env('PAYPAL_SANDBOX_API_USERNAME', 'sb-w3dft5440640_api1.business.example.com'),
        // 'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', 'MZBMBJA8TEXYEC5S'),
        // 'secret'      => env('PAYPAL_SANDBOX_API_SECRET', 'ANdbH4ZXsKVWs0zGFd.rQAWV.sIlAPZayqKIhoybsOhUbCTVGcCNwn6d'),
        // 'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', 'AWvQ6jZqqKX_rS8CpmIttCXxM9ooRPMh1Ch-qK1HxnpfVARXIO3w5QWVmeEpp0GWADJpsB9QXMYWTc2T'),
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', 'EAciRAXk5uHUCLyxIjJA6_NyRKJ6NGF9TQjFrj11NzpA0-zBaqH7rETR7TPtqA5MisG2aQaloy7-lxsI'),
        'app_id'      => 'APP-80W284485P519543T', // Used for testing Adaptive Payments API in sandbox mode
    ],
    'live' => [
        'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
        'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
        'secret'      => env('PAYPAL_LIVE_API_SECRET', ''),
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
        'app_id'      => '', // Used for Adaptive Payments API
    ],

    'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => '', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => true, // Validate SSL when creating api client.
];
