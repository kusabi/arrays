## Description

Return the first item that matches the predicate callback.

```php
array_find(array $array, callable $predicate, mixed $default = null): mixed
```

## Parameters

**array**

The input array

**predicate**

A callback that is run on every item of the array.
It will be passed the value as the first argument, and the key as the second argument.
It must return `true` in order to be considered a match

**default**

Returned if nothing causes the predicate to return true.
Defaults to `null`

## Returns

Returns the value of the entry that caused the predicate callback to return `true`.
Returns `null` if nothing returned `true`.

## Examples

**Example # 1 Example uses of array_find() to find the first number greater than 10**

```php
$array = [1, 5, 8, 14, 22];
$result = array_find($array, function ($value) {
    return $value > 10;
})
echo $value;
```

The above example will output:

```
14
```

**Example # 2 Example of array_find() to find the first value with a key greater than 10**

```php
$array = [2, 4, 6, 8, 10, 1, 3, 5, 7, 9, "hello", "how", "are", "you"];
$result = array_find($array, function ($value, $key) {
    return $key > 10;
})
echo $value;
```

The above example will output:

```
hello
```