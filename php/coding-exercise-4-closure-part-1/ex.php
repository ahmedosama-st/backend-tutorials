<?php

function fibonacci(int $index): array
{
    return ['current' => $x, 'next' => $y];
    /* Replace $x and $y with your solution */
}

$fib = fibonacci(5);

var_dump($fib['current'] == 5);
var_dump($fib['next'] instanceof Closure);
var_dump($fib['next']() == 8);
var_dump($fib['next']() == 13);
var_dump($fib['next']() == 21);
var_dump($fib['next']() == 34);
var_dump($fib['next']() == 55);
