## Description

Return a subset of the array by passing in an array of keys to discard

```php
array_except(array $array, array $keys): array
```

## Parameters

**array**

The input array

**keys**

The keys to remove from the result

## Returns

Returns a copy of the array with the keys removed.

## Examples

**Example # 1 Example uses of array_except()**

```php
print_r(
    array_except([
        'a' => 1, 
        'b' => 2
    ], ['a'])
);
```

The above example will output:

```
Array
(
    [b] => 2
)

```