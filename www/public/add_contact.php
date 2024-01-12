<?php

$config = require __DIR__ . '/../config.php';

$dbh = new PDO("mysql:host={$config['dbHost']};dbname={$config['dbName']}", $config['dbUser'],  $config['dbPassword']);
$sth = $dbh->prepare('SELECT * FROM contacts ORDER BY created_on ASC');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
    print_r($result);
echo '</pre>';