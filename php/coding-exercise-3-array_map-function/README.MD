# PHP coding exercise #1

The `array_map` function is used to apply a `mapping` function to every item in a provided `array`

**Todo**: Implement a `function` that does the same implementation without using the built-in function (Iteratively once, recursively once).

_Bonus_ Try to implement the recursive solution in an optimized way i.e. `Tail call` way.

**Instructions**

1. The function `arrayMap` defined in `ex.php` should accept `2` arguments.

   1. A `callable` function to represent the mapping function
   2. The `array` on which you will perform the mapping function

2. It should `return` empty array if the provided array is empty.
3. It should `return` an array with the mapped items [equal size to the provided array].
4. You should not modify the base array, return a new array instead.

   Ex:

   ```php
    $arr = [1,2,3];

    var_dump(array_map(fn($x) => $x * 2, $arr)); // [2, 4, 6]
   ```
