## Description

Get the last item from an array

```php
array_last(array $array): mixed
```

## Parameters

**array**

The input array

## Returns

The last item in the array or null for an empty array

## Examples

**Example # 1 Example uses of array_last() with an empty array**

```php
$array = [];
echo array_last($array);
```

The above example will output:

```
null
```

**Example # 2 an array with items**

```php
$array = ['a' => 1, 2, 3];
echo array_last($array);
```

The above example will output:

```
3
```