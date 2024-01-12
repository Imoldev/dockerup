<?php

$numPages = 10;
$activePage = (int) $_GET['page'];

$contactList = [
    31131 => ['name' => 'John1', 'phone' => '7897987987'],
    2424342 => ['name' => 'John2', 'phone' => '7897987987'],
    242 => ['name' => 'John3', 'phone' => '7897987987'],
    2424 => ['name' => 'John4', 'phone' => '7897987987'],
    2424 => ['name' => 'John5', 'phone' => '7897987987'],
    242 => ['name' => 'John6', 'phone' => '7897987987'],
];

$config = require __DIR__ . '/../config.php';

$dbh = new PDO("mysql:host={$config['dbHost']};dbname={$config['dbName']}", $config['dbUser'],  $config['dbPassword']);
$sth = $dbh->prepare('SELECT * FROM contacts ORDER BY created_on ASC');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
    print_r($result);
echo '</pre>';

require __DIR__ . '/../../templates/contacts_list.tmpl.php';




