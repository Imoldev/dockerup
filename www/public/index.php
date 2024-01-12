<?php
$myArr = [];

print_r($myArr);

$myArr[] = 7832;
$myArr[] = 783;
$myArr[] = 7;

$myArr['hhh'] = 7887987;

print_r($myArr);

foreach ($myArr as $someVal) {
    //var_dump($someKey);
    var_dump($someVal);

}