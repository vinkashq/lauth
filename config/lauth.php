<?php

return [
    'homepage_url' => env('LAUTH_HOMEPAGE_URL', 'http://example.com'),
    'logomark_url' => [
        'light' => env('LAUTH_LOGOMARK_URL', '/images/logomark-black.png'),
        'dark'  => env('LAUTH_DARK_LOGOMARK_URL', '/images/logomark-white.png'),
    ],
    'logo_url'     => [
        'light' => env('LAUTH_LOGO_URL', '/images/logo-black-256h.png'),
        'dark'  => env('LAUTH_DARK_LOGO_URL', '/images/logo-white-256h.png'),
    ],
];
