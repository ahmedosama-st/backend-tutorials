# PHP coding exercise #1

The JavaScript programming language supports variable assignment as a conditional for the first non-false value to be assigned i.e.

```js
let name = false || 0 || -0 || 'ahmed'
// name is assigned the value 'ahmed' as all the previous values are falsy and the non-empty string 'ahmed' is the only truthy value.
```

**Instructions**

1. The function `either` defined in `ex.php` should accept `n` arguments.
2. It should `return` the very first truthy value it finds within the list of arguments passed to it.
3. DO NOT coalesce any argument or cast to any type.
