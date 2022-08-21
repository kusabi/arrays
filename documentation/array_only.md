## Description

Return a subset of the array by passing in an array of keys to keep

```php
array_only(array $array, array $keys): array
```

## Parameters

**array**

The input array

**keys**

The keys to keep in the result

## Returns

Returns a copy of the array with the keys kept and all others discarded.

## Examples

**Example # 1 Example uses of array_only()**

```php
print_r(
    array_only([
        'a' => 1, 
        'b' => 2
    ], ['a'])
);
```

The above example will output:

```
Array
(
    [a] => 1
)

```