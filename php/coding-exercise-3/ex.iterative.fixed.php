<?php

function arrayMap(callable $mapper, array $array): array
{
    $result = [];

    foreach ($array as $item) {
        $result[] = $mapper($item);
    }

    return $result;
}
