<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '462473132426-i44cved3798gr5rb9dpdj90hm1ooms99.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost/laravelNewTopic/google/callback',
    ],

    'facebook' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => 'http://localhost/laravelNewTopic/facebook/callback',
    ],

];
