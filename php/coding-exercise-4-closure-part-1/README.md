# Coding exercise #4 - part #1

Consider the following situation and try to implement a suitable function
to solve following problem.

You're hired for the following task, and you should implement a function that finds the golden ratio (Fibonacci series/sequence) but as in chunks when asked (Lazily loading) do not design a function that returns the whole Fibonacci series at once (Eagerly loading).

```php
// Starter template
function fibonacci(int $index): array {
	return ['current' => $x, 'next' => $y];
	/* Replace $x and $y with your solution */
}
```

**_Instructions:_**

- Your function is defined in `ex.php`, and it accepts the `index`
- Your function should `return` an `array` on the first call holding the `current` fibonacci number which is the evaluation of the given index, and a `next` property which holds a callable to find the next number in series.
- Your function must adhere to the recursion optimizations we've discussed earlier (Tail call optimization)
- The `next` property on your array must be a type of `Closure`

**_Todo:_** Implement a `fibonacci` function that suits the preceding instructions

**_Hint:_** Design your solution to be a recursive function using the idea of lexical scoping (closures)
