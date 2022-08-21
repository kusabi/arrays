## Description

Set a key in the array using dot notation for nested arrays

```php
array_set(array $array, string $key, mixed $value): void
```

## Parameters

**array**

The input array

**key**

The key to set. This can include dot notation for setting values in a nested array.

**value**

The value to set the key

## Examples

**Example # 1 Example uses of array_set() for normal keys**

```php
$array = ['a' => 1, 'b' => 2];
array_set($array, 'c', 3);
print_r($array);
```

The above example will output:

```
Array
(
    [a] => 1
    [b] => 2
    [c] => 3
)
```

**Example # 2 Example uses of array_set() for nested keys**

```php
$array = ['a' => 1, 'b' => 2];
array_set($array, 'c.a.b', 3);
print_r($array);
```

The above example will output:

```
Array
(
    [a] => 1
    [b] => 2
    [c] => Array
        (
            [a] => Array
                (
                    [b] => 3
                )

        )

)

```