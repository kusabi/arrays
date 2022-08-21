## Description

Get the nth value from an array.

Can use negative indices to work backwards from the end.

```php
array_at(array $array, int $index): mixed
```

## Parameters

**array**

The input array

**index**

The index to read from. 0 for the first, 1 for the second etc.

This also allows for -1 for the last.

## Returns

Returns the item at the index if found.

## Examples

**Example # 1 Example uses of array_at()**

```php
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo array_at($array, 0);
echo array_at($array, 2);
```

The above example will output:

```
1
3
```

**Example # 2 Example uses of array_at() with a negative index**

```php
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo array_at($array, -1);
echo array_at($array, -2);
```

The above example will output:

```
4
3
```