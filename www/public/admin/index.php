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

require __DIR__ . '/../../templates/contacts_list.tmpl.php';




