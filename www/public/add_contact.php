<?php

$config = require __DIR__ . '/../config.php';

$dbh = new PDO("mysql:host={$config['dbHost']};dbname={$config['dbName']}", $config['dbUser'],  $config['dbPassword']);
$stmt = $dbh->prepare("INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)");
$stmt->execute([':name' => 'Test', ':email' => 'test@test.ru', ':phone' => '=7879797998']);
var_dump($stmt->rowCount());