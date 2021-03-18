<?php 
    return [ 
        'client_id' => env('PAYPAL_CLIENT_ID','ATsrC9D-rASRNKj1kjLjxbceehORRmHWXzryDCssFEE4NynKcuG5cqrDaeLX4MCrmR6JSO6l3n_VdmSF'),
        'secret' => env('PAYPAL_SECRET','EKJk9_CygoirL-JMDnaOIC140LHLlXAz78UQE92dA2PJ2-2w72iPlbwEaIODCAgJhhvu6qE7AZW4qHBM'),
        'settings' => array(
            'mode' => env('PAYPAL_MODE','live'),
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path() . '/logs/paypal.log',
            'log.LogLevel' => 'ERROR'
        ),
    ];