<?php

/*Settings connection database*/

return [
    'host' => 'localhost',
    'dbname' => 'test',
    'user' => 'root',
    'password' => 'qwerfdsa',
    'charset' => 'utf8',
    'type' => 'mysql',
    'opt' => [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ]
];