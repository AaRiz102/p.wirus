<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Vite Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the paths for Vite's manifest and build directory.
    |
    */

    'build_directory' => public_path('build'),
    'manifest_path' => public_path('build/manifest.json'),

    'input' => [
        'js' => 'resources/js/app.js',
        'css' => 'resources/css/app.css',
    ],

    // Additional configuration options can be added here as needed.
];
