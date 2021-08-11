<?php

$counter = 1;

function memoizedFactorial()
{
    global $counter;
    $cache = [1 => 1];

    $factorial =  function ($number) use (&$cache, &$factorial, &$counter) {
        if (!array_key_exists($number, $cache)) {
            $counter++;
            $cache[$number] = $number * $factorial($number - 1);
        }

        return $cache[$number];
    };

    return $factorial;
}

$f = memoizedFactorial();

var_dump($f(6));
var_dump($f(5));
var_dump($f(4));
var_dump($f(3));

var_dump($counter);
