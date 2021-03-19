<?php 
    // return [ 
    //     'client_id' => env('PAYPAL_CLIENT_ID','ATsrC9D-rASRNKj1kjLjxbceehORRmHWXzryDCssFEE4NynKcuG5cqrDaeLX4MCrmR6JSO6l3n_VdmSF'),
    //     'secret' => env('PAYPAL_SECRET','EKJk9_CygoirL-JMDnaOIC140LHLlXAz78UQE92dA2PJ2-2w72iPlbwEaIODCAgJhhvu6qE7AZW4qHBM'),
    //     'settings' => array(
    //         'mode' => env('PAYPAL_MODE','live'),
    //         'http.ConnectionTimeOut' => 30,
    //         'log.LogEnabled' => true,
    //         'log.FileName' => storage_path() . '/logs/paypal.log',
    //         'log.LogLevel' => 'INFO',
    //         // 'service.EndPoint' => 'https://api.paypal.com'
    //         // 'service.EndPoint' => 'https://api-m.paypal.com/v2/checkout/orders/', 
    //     ),
    // ];
    return [ 
        'client_id' => env('PAYPAL_CLIENT_ID','Adc2E4SMJCpuoUYuyA_u7Ah-r-I0cNjF4kOOxiGd9jWZ9W4XOxt_iwLFHhTVvfLqXcx5gDAIY_hlSn9A'),
        'secret' => env('PAYPAL_SECRET','EEdqWKA9WBmQ73pF-JhkP3Ux27tAKJq0Vym8jzYvvA0a11Gp3VGsAV1At--mPrLl8T3w5NlUX7Q9ZZMD'),
        'settings' => array(
            'mode' => env('PAYPAL_MODE','sandbox'),
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path() . '/logs/paypal.log',
            'log.LogLevel' => 'INFO'
        ),
    ];