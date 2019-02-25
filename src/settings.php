<?php
define('APP_ROOT', __DIR__);
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/'
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG
        ],
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=system_core;charset=utf8',
            'usr' => 'system_core',
            'pwd' => 'Nokai82!0'
        ]
    ]
];