<?php

function arrayCombine(array $keys, array $values): array|false
{
    $result = [];

    if (count($keys) !== count($values)) {
        return false;
    }

    foreach ($keys as $index => $key) {
        $result[$key] = $values[$index];
    }

    return $result;
}
