## Description

Return and remove a key in the array using dot notation for nested arrays

```php
array_pull(array $array, string $key): mixed
```

## Parameters

**array**

The input array

**key**

The key to return and unset. This can include dot notation for setting values in a nested array.


## Examples

**Example # 1 Example uses of array_pull() for normal keys**

```php
$array = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_pull($array, 'b');
print_r($array);
```

The above example will output:

```
2
Array
(
    [a] => 1
    [c] => 3
)
```

**Example # 2 Example uses of array_pull() for nested keys**

```php
$array = ['a' => 1, 'b' => ['a' => 1, 'b' => 2, 'c' => 3], 'c' => 3];
echo array_pull($array, 'b.b');
print_r($array);
```

The above example will output:

```
2
Array
(
    [a] => 1
    [b] => Array
       (
           [a] => 1
           [c] => 3
       )
    [c] => 3
)
```