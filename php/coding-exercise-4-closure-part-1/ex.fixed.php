<?php

function fibonacci(int $index): array
{
    $series = [];

    function go(int $idx, int $current = 0, int $next = 1)
    {
        if ($idx == 0) {
            return $current;
        }

        if ($idx == 1) {
            return $next;
        }

        return go($idx - 1, $next, $current + $next);
    }

    $series[$index] = go($index);

    return ['current' => $series[$index], 'next' => function () use (&$index, &$series) {
        $index++;

        return $series[$index] = go($index);
    }];
}

$fib = fibonacci(5);

var_dump($fib['current'] == 5);
var_dump($fib['next'] instanceof Closure);
var_dump($fib['next']() == 8);
var_dump($fib['next']() == 13);
var_dump($fib['next']() == 21);
var_dump($fib['next']() == 34);
var_dump($fib['next']() == 55);
