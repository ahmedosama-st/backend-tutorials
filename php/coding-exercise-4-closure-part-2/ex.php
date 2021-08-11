<?php

function CustomGenerator(array $items): callable
{
    return fn () => null;
}

$arr= [1, 2, 3, 4];

$next  = CustomGenerator($arr);

var_dump($next instanceof Closure);

foreach ($arr as $item) {
    var_dump($next()['value'] == $item);
}

var_dump($next()['value'] === null);
var_dump($next()['done']);
