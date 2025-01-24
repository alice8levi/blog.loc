<?php
return [
    'host' => 'MySQL-8.2',
    'dbname' => 'mvc_blog',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8', // utf8mb4 если летит кодировка
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //массив с именами столбцов
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //до 8
    ],
];