## Description

Remove a key in the array using dot notation for nested arrays

```php
array_unset(array $array, string $key): void
```

## Parameters

**array**

The input array

**key**

The key to unset. This can include dot notation for setting values in a nested array.


## Examples

**Example # 1 Example uses of array_unset() for normal keys**

```php
$array = ['a' => 1, 'b' => 2, 'c' => 3];
array_unset($array, 'b');
print_r($array);
```

The above example will output:

```
Array
(
    [a] => 1
    [c] => 3
)
```

**Example # 2 Example uses of array_unset() for nested keys**

```php
$array = ['a' => 1, 'b' => ['a' => 1, 'b' => 2, 'c' => 3], 'c' => 3];
array_unset($array, 'b.b');
print_r($array);
```

The above example will output:

```
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