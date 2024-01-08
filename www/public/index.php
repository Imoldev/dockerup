<?php
declare(strict_types=1);

//var_dump(false && true || true ); 
//var_dump( false AND true || true);

include __DIR__ . '/../lib/utils.php';

var_dump(sum(5, 2));

$res = require __DIR__ . '/../config.php';
var_dump($res);

