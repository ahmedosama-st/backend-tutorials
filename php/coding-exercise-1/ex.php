<?php

function either()
{
}

var_dump(either('', 0, -0, [], [1]) == [1]); // true
var_dump(either("ahmed", '0', '-0', [1,2,3,4], 'ahmed') == 'ahmed'); // true
var_dump(either('0', '-0', 'ahmed') == '-0'); // true
var_dump(either('', 0, -0, []) == NULL); // true
var_dump(either([[]], 1, 2, -3, -4) == [[]]); // true
var_dump(either([], 0, '', -1) == -1); // true