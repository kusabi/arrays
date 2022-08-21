## Description

Returns a value from the array, using dot notation for nested sets.

Returns the default value if not found. This value defaults to `null`

```php
array_get(array $array, string $key, mixed $default): mixed
```

## Parameters

**array**

The input array

**key**

The key to get. This can include dot notation for setting values in a nested array.

**default**

The value to return if the key is not found. This defaults to `null`

## Return Values

Returns the value stored in the array using the key. Returns the default value if it is not found.

## Examples

**Example # 1 Example uses of array_get() for normal keys**

```php
$array = ['a' => 1, 'b' => 2];
echo array_get($array, 'b');
```

The above example will output:

```
2
```

**Example # 2 Example uses of array_get() for nested keys**

```php
$array = ['a' => 1, 'b' => ['a' => 2, 'b' => 3]];
echo array_get($array, 'b.b');
```

The above example will output:

```
3
```

**Example # 3 Example uses of array_get() that returns the default value**

```php
$array = ['a' => 1, 'b' => ['a' => 2, 'b' => 3]];
echo array_get($array, 'b.c', 'not found');
```

The above example will output:

```
not found
```