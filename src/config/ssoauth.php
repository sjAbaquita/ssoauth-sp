<?php

return [
    'client_id' => env('EM_CLIENT_ID'),
    'api_key'   => env('EM_API_KEY'),
    'redirect_uri'  => env('EM_REDIRECT_URI'),
    'name'  => '',

    'routesPrefix'  => 'ssoauth',
    'redirect_if_authenticated' => '/home',

    'idp'   => [
        'host'  => 'http://192.168.0.99:8000',
        'login_uri' => 'http://192.168.0.99:8000/login/v1/autho/authAccount',
    ],

    'add_query' => [
        'dosso' => 1,
        'action'  => 'sso',
    ],
];