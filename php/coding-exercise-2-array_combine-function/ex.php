<?php

function arrayCombine($keys, $values)
{
    // implement your logic here
}

var_dump(arrayCombine(['one', 'two'], [1, 2]) == ['one' => 1, 'two' => 2]);
var_dump(arrayCombine(['one', 'two', 'three'], [1, 2]) == false);
var_dump(arrayCombine([], []) == []);
