# Coding exercise #4 - Part #3

In this exercise you're assigned to implement a factorial `function` that adheres to the [memoziation](https://en.wikipedia.org/wiki/Memoization#:~:text=In%20computing%2C%20memoization%20or%20memoisation,the%20same%20inputs%20occur%20again.) concept

### Memoization

> The ability of a function to keep a local cache to store the results of heavy operations to return them immediately if asked for again.

_Example_

```php
function blockExecution() {
	for($i = 0; $i < PHP_INT_MAX; $i++) {
		var_dump($i);
	}
}
```

This `blockExecution` function takes a lot of time to execute and a lot of memory, well but the memory will be reserved even if we apply caching (memoization), but what about the time we've been waiting for this operation to end?

Although it's a silly operation, but imagine that you're querying against the database or doing some traversing algorithm against some data structures to pluck out some data, and this algorithm or database query takes a lot of time to execute as it's defined as heavy work.
You shouldn't wait all that time every time you try to find some item in a database or a branch in a binary tree or vertex in a graph.

Specially if you're re-calling this operation a lot, that's where memoization comes into play, you can easily query against your database or perform your heavy traversing algorithm and pluck out all the data you might need for let's say 20 requests later, and cache them in your memory.

So, given the boilerplate for your function you have to implement a function that satisfies the following instructions:

- Your implementation should `return` a `function` that whenever executed with number `x`, returns the factorial of `x` using the factorial function defined in the boilerplate
- To test your function, the `$counter` shall remain `6` after calling the factorial function passing the number `6` to find its factorial.

```php
$counter = 1;

function factorial(int $number)
{
    if ($number <= 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}
```

_**Hints:**_

- Do not try to optimize the recursive function using TCO or recursive trampolines.
- You'll need to modify some data, so make a good use of variable reference
- In order to apply recursion to a `closure` you must store it in a variable and pass that variable to the function definition as a callback by reference

```php
$fn = function () use(&$fn) {};
```
