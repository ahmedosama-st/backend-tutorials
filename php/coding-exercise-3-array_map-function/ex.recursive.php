<?php

function arrayMap(callable $mapper, array $array): array
{
    // Implementation
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
