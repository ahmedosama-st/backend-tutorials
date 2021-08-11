<?php

$counter = 1;

function factorial(int $number)
{
    if ($number <= 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}

var_dump($f(6));
var_dump($f(5));
var_dump($f(4));
var_dump($f(3));

var_dump($counter);
