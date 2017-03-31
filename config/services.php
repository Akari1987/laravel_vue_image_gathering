<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    /*
    |--------------------
    |For Social Auth
    |--------------------
    */
    'github' => [
        'client_id' => '4106da8f52ae7883bb6b',
        'client_secret' => 'dc1b4d995d48e3c1c81e542bbe6a7878da58c18c',
        'redirect' => ''
    ],
    
    'twitter' => [
        'client_id' => 'QovQJky1diWy0LRftcGqN0Rgr',
        'client_secret' => 'EK5dMcxbbZEJxlxFGIym22KaJVXUOJF2grR6AiJovyGY5T18OM',
        'redirect' => ''
    ],
    
    'google' => [
        'client_id' => '341060933943-28mqgh89omhkke9tu6hfmc5imdn89jq7.apps.googleusercontent.com',
        'client_secret' => 'Bg1CR-MT9bispwhjX8D6cggv',
        'redirect' => 'https://laravel-vue-image-gathering-akariozora.c9users.io/'
    ],
];
