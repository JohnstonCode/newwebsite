<?php

define('APP_ROOT', __DIR__);

$config = [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => 'database',
            'port' => '3306',
            'database' => 'av',
            'username' => 'root',
            'password' => 'password',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        'doctrine' => [
            'dev_mode' => true,
            'cache_dir' => APP_ROOT . '/var/doctrine',
            'metadata_dirs' => [APP_ROOT . '/src/Domain'],
            'connection' => [
                'driver' => 'mysql',
                'host' => 'database',
                'port' => 3306,
                'dbname' => 'av',
                'user' => 'root',
                'password' => 'password',
                'charset' => 'utf-8'
            ]
        ]
    ],
];

return $config;