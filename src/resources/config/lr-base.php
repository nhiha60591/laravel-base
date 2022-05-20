<?php

return [
    'generator' => [
        'basePath' => app()->path(),
        'rootNamespace' => 'App\\',
        'stubsOverridePath' => app()->path(),
        'paths' => [
            'models' => 'Models',
            'controllers' => 'Http/Controllers',
        ]
    ]
];