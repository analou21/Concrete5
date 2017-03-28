<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost',
            'database' => 'factorian',
            'username' => 'root',
            'password' => 'lamp',
            'charset' => 'utf8',
        ],
    ],
];
