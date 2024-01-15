<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

echo '<pre>';
print_r($_FILES);
echo '</pre>';

$tmpFile = $_FILES['photo']['tmp_name'];
$userFileName = $_FILES['photo']['name'];

move_uploaded_file($tmpFile, __DIR__ . '/upload/' . uniqid() . $userFileName);

die;

$dbh = new PDO('mysql:host=db;dbname=student', 'student', 'student');
$stmt = $dbh->prepare("INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)");
$stmt->execute([':name' => $_POST['user_name'], ':email' => $_POST['email'], ':phone' => $_POST['phone']]);

header('Location: /index.php');





/*
$config = require __DIR__ . '/../config.php';

$dbh = new PDO("mysql:host={$config['dbHost']};dbname={$config['dbName']}", $config['dbUser'],  $config['dbPassword']);
$stmt = $dbh->prepare("INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)");
$stmt = $dbh->prepare("INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)");
$stmt->execute([':name' => 'Test', ':email' => 'test@test.ru', ':phone' => '=7879797998']);
var_dump($stmt->rowCount());

 */