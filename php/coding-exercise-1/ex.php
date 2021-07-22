<?php

function either()
{
}

var_dump(either('', 0, -0, [], [1]) == [1]);
var_dump(either('ahmed', '0', '-0', [1, 2, 3, 4], 'ahmed') == 'ahmed');
var_dump(either('0', '-0', 'ahmed') == '-0');
var_dump(either('', 0, -0, []) == null);
var_dump(either([[]], 1, 2, -3, -4) == [[]]);
var_dump(either([], 0, '', -1) == -1);
