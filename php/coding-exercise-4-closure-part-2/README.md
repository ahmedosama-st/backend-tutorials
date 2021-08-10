# Coding exercise #4 - part #2

The singly linked list [SSL](https://en.wikipedia.org/wiki/Linked_list#Singly_linked_list) data structure is commonly used with many operations e.g.

- [Generators](https://www.php.net/manual/en/language.generators.overview.php)
- [Middleware pattern](https://softwareengineering.stackexchange.com/questions/203314/what-is-the-middleware-pattern)
- [Stack data structure](https://www.geeksforgeeks.org/stack-data-structure/)
- [Queue data structure](https://www.geeksforgeeks.org/queue-data-structure/)

The idea behind SSL is really simple, you have an item `x` called `node`
this node holds a `value` that could be any type: `string`, `int`, `array`, `object` or `null`
and a `next` that refers to the next item in the list.

Imagine you have an array like the following to represent an SSL

```php
$x  = [
	'value' => [1, 2, 3],
	'next' => [
		'value' => [4, 5, 6],
		'next' => [
			'value' => [7, 8, 9],
			'next' => null
		],
	]
];
```

This is actually an SSL and the last item in the list is the array `[7,8,9]`, how did I know? Because the `next` property is pointing to null, which means that we have hit the end of the list

All you have to do is to implement a function to mock the process of previous array that represented an SSL.

```php
// Starter template
function SinglyLinkedList(array $items): callable
{
	return; // Add your logic here
}
```

**_Instructions:_**

- Your function is defined in `ex.php`, and it accepts an `array` of items
- Your function must return an `array` with the following signature
  ```php
  $x = [
    'value' => 'The value of the current item in the list',
    'done' => 'A boolean flag
  	whether you have reached the end of the list or not'
  ];
  ```

**_Todo:_** Implement a `SinglyLinkedList` function that suits the preceding instructions

**_Hint:_** Design your solution to be a function using the idea of lexical scoping (closures)
