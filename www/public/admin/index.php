<?php

$dbh = require __DIR__ . '/../../db/pdo.php';

$numPages = 10;
if(!isset($_GET['page'])) {
    $activePage = 1;
} else {
    $activePage = (int) $_GET['page'];
}


$sth = $dbh->prepare('SELECT * FROM contacts ORDER BY created_on ASC');

$sth->execute();
$contactList = $sth->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . '/../../templates/contacts_list.tmpl.php';











/*
$config = require __DIR__ . '/../config.php';

$dbh = new PDO("mysql:host={$config['dbHost']};dbname={$config['dbName']}", $config['dbUser'],  $config['dbPassword']);
$sth = $dbh->prepare('SELECT * FROM contacts ORDER BY created_on ASC');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
    print_r($result);
echo '</pre>';
*/





