<?php

function arrayMap(callable $mapper, array $array): array
{
    foreach ($array as $index => $item) {
        $array[$index] = $mapper($item);
    }

    return $array;
}
