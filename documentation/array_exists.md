## Description

Checks if the given key or index exists in the array using dot notation for nested arrays.

This method is identical to [array_key_exists](https://www.php.net/manual/en/function.array-key-exists.php) except it uses dot notation for nested arrays.

```php
array_exists(array $array, string $key): bool
```

## Parameters

**array**

The input array

**key**

The key to check. This can include dot notation for setting values in a nested array.

## Returns

Returns **TRUE** on success or **FALSE** on failure.

## Examples

**Example # 1 Example uses of array_exists() using normal keys**

```php
$array = ['a' => 1, 'b' => 2];
if (array_exists($array, 'a')) {
    echo 'true';
} else {
    echo 'false';
}
```

The above example will output:

```
true
```

**Example # 2 Example uses of array_exists() using nested keys**

```php
$array = ['a' => 1, 'b' => ['a' => 1, 'b' => 2]];
if (array_exists($array, 'b.a')) {
    echo 'true';
} else {
    echo 'false';
}
```

The above example will output:

```
true
```