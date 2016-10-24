<?php

// routes.global.php
return [
    'routes' => [
        [
            'path' => '/',
            'middleware' => \App\HelloWorldAction::class,
            'allowed_methods' => [ 'GET' ],
        ],
    ],
];