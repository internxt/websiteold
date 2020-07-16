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
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook-secret' => env('STRIPE_WEBHOOK_SECRET'),
        'vision-sku' => env('VISION_SKU'),
        'prices' => [
            'vision' => 995,
        ],
    ],

    'trello' => [
        'roadmap' => env('TRELLO_URL'),
    ],

    'coinmarketcap' => [
        'url' => env('COINMARKETCAP_URL'),
    ],

    'medium' => [
        'rss' => env('MEDIUM_RSS_URL'),
        'url' => env('MEDIUM_URL'),
    ],

    'rss2json' => [
        'url' => env('RSS2JSON_URL'),
    ],

    'internxt' => [
        'name' => env('COMPANY_NAME'),
        'email' => env('EMAIL_ADDRESS'),
    ],

];
