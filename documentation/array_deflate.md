## Description

Flattens a nested array into a single level array.

By default, it will keep the keys but use a dot notation to indicate depth.

```php
array_deflate(array $array, bool $keys): array
```

## Parameters

**array**

The input array

**keys**

A boolean flag to maintain keys. 

If true, all nested keys will be joined to the parent key with a dot. 

If false, keys will not be maintained.

## Returns

Returns a copy of the array with all nested entries flattened into a single level array.

## Examples

**Example # 1 Example uses of array_deflate() while maintaining keys**

```php
$array = ['a' => 1, 'b' => ['a' => 2, 'c' => 3]];
print_r(array_deflate($array));
```

The above example will output:

```
Array
(
    [a] => 1
    [b.a] => 2
    [b.b] => 3
)

```

**Example # 2 Example uses of array_deflate() while not maintaining keys**

```php
$array = ['a' => 1, 'b' => ['a' => 2, 'c' => 3]];
print_r(array_deflate($array, false));
```

The above example will output:

```
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
)

```