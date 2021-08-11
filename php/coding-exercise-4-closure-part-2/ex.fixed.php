<?php

function CustomGenerator(array $items): callable
{
    $i = 0;

    return function () use ($items, &$i) {
        $item = $items[$i];

        $i++;

        if ($i > count($items)) {
            return ['value' => null, 'done' => true];
        }

        return ['value' => $item, 'done' => false];
    };
}

$arr= [1, 2, 3, 4];

$next  = CustomGenerator($arr);

var_dump($next instanceof Closure);

foreach ($arr as $item) {
    var_dump($next()['value'] == $item);
}

var_dump($next()['value'] === null);
var_dump($next()['done']);
