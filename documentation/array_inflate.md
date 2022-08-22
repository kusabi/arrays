## Description

Expands a flattened array back into a nested array.

This will not work on flattened arrays where the keys were not kept.

```php
array_inflate(array $array): array
```

## Parameters

**array**

The input array

## Returns

Returns a copy of the array inflated so that any keys using dot notation become nested arrays instead

## Examples

**Example # 1 Example uses of array_inflate()**

```php
$array = ['a' => 1, 'b.a' => 2, 'b.b' => 3];
print_r(array_inflate($array));
```

The above example will output:

```
Array
(
    [a] => 1
    [b] => Array
        (
            [a] => 2
            [b] => 3
        )
)
```