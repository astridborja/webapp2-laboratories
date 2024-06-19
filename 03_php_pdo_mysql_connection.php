<?php

$host = 'localhost'; // name of localhost
$db = 'webapp2db'; // name of database
$user = 'root'; // mysql user
$password = ''; // mysql password



$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if ($pdo) {
        echo "Connected successfully!";

       
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}