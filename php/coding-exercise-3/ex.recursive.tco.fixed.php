<?php

function map(callable $mapper, array $array): array
{
    function go(callable $mapper, array $array, array $accum = []):array
    {
        if (length($array) === 0) {
            return $accum;
        }

        return go($mapper, tail($array), concat($accum, [$mapper(first($array))]));
    }

    return go($mapper, $array);
}

// Helpers

function length($array)
{
    return count($array);
}

function first($array)
{
    foreach ($array as $item) {
        return $item;
    }
}

function concat($array1, $array2)
{
    foreach ($array2 as $item) {
        $array1[] = $item;
    }

    return $array1;
}

function tail($array)
{
    return array_slice($array, 1);
}

function trampoline(callable $fn)
{
    return function (...$args) use ($fn) {
        $result = $fn(...$args);

        while (is_callable($result)) {
            $result = $result();
        }

        return $result;
    };
}
