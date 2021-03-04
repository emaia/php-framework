<?php

return [
    'database' => [
        'sqlite' => [
            'connection' => "sqlite:",
            'username' => '',
            'password' => '',
            'database' => 'database.sqlite',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ]
        ]
    ]
];
