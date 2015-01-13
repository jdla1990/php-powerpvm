<?php
$database = new medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'robie',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'wendys18',

    // optional
    'port' => 3306,
    'charset' => 'utf8',
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);