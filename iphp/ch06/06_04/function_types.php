<?php
$number = 2;
$numberRef = 2;

// Pass by value
function doubleIt($number) {
    return $number *= 2;
}

// Pass by reference
function doubleItRef(&$num) {
    $num *= 2;
}

$doubled = doubleIt(10);
$doubledRef = doubleItRef($numberRef);

echo '$number is ' . $number;
echo '<br>';
echo $doubled;
echo '<br>';
var_dump($doubledRef);
echo '<br>';
echo '$numberRef is ' . $numberRef;
