<?php

function fibonacci(int $index): array
{
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

    return ['current' => go($index), 'next' => function () use (&$index) {
        $index++;

        return go($index);
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
