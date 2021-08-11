<?php

$counter = 1;

function factorial(int $number)
{
    if ($number <= 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}

var_dump($f(6) == 720);
var_dump($counter == 6);
var_dump($f(5) == 120);
var_dump($counter == 6);
var_dump($f(4) == 24);
var_dump($counter == 6);
var_dump($f(3) == 6);
var_dump($counter == 6);
