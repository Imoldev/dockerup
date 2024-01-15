<?php

$config = require __DIR__ . '/../config.php';

$dbh = new PDO("mysql:host={$config['dbHost']};dbname={$config['dbName']}", $config['dbUser'], $config['dbPassword']);

return $dbh;
