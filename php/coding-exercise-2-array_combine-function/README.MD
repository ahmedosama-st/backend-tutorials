# PHP coding exercise #1

The `array_combine` function in `php` is used to make an `array` out of two other `arrays` where provided
through its parameters and produces an `array` with the keys supplied from the first parameter `array` and
the values are the second parameter `array`.

**Todo**: Implement a `function` that does the same implementation without using the built in function.

**Instructions**

1. The function `arrayCombine` defined in `ex.php` should accept `2` arguments.
2. It should `return` an `array` where its keys are the first supplied `array` and the values are the second `array`.
3. It should `return` `false` if the size of one array isn't matching the other's size.

   Ex:

   ```php
   $result = array_combine(['one', 'two'], [1, 2]);
    var_dump($result); // $result is now ['one' => 1, 'two' => 2]
   ```

4. DO NOT coalesce any argument or cast to any type.
