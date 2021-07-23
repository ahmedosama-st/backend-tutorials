<?php

function arrayMap(callable $mapper, array $array): array
{
    if (length($array) === 0) {
        return [];
    }

    return concat(
        [$mapper(first($array))],
        arrayMap($mapper, tail($array))
    );
}
