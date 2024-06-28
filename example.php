<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$decimalString = '84 104 105 115 32 105 115 32 97 32 116 101 115 116 46';
$delimiter = ' ';
$return = decimalToString($decimalString, $delimiter);
var_dump($return);