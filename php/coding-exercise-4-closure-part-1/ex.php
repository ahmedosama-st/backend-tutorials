<?php

function fibonacci(int $index): array
{
    return [];
}

$fib = fibonacci(5);

var_dump($fib['value'] == 5);
var_dump($fib['next'] instanceof Closure);
var_dump($fib['next']() == 8);
var_dump($fib['next']() == 13);
var_dump($fib['next']() == 21);
var_dump($fib['next']() == 34);
var_dump($fib['next']() == 55);
