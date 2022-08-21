## Description

Picks one or more random entries out of an array, and returns the value (or values) of the random entries.

This method is a counterpart of the native method [array_rand](https://www.php.net/manual/en/function.array-rand.php)
```php
array_random(array $array, int $num = 1): mixed
```

## Parameters

**array**

The input array

**num**

Specifies how many entries should be picked.

## Returns

When picking only one entry, `array_random()` returns a random value from the array.

When picking multiple entries, `array_random()` returns an array of random elements form the array with the random keys intact.

Trying to pick more elements than there are in the array will result in an **E_WARNING** level error, and NULL will be returned.


## Examples

**Example # 1 Example uses of array_random() for a single value**

```php
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo array_random($array);
```

The above example may output:

```
3
```

**Example # 2 Example uses of array_random() for multiple values**

```php
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
print_r(array_random($array, 2));
```

The above example may output:

```
Array
(
    [b] => 2
    [d] => 4
)
```