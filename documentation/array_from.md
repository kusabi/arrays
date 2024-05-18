## Description

Attempt to convert an input into an array

```php
array_from(mixed $data): array
```

## Parameters

**data**

The input data

## Returns

Returns an array from the input

## Examples

**Example # 1 Example uses of array_from()**

```php
print_r(array_from([1, 2, 3]));
print_r(array_from(1));
print_r(array_from('hello'));
```

The above example will output:

```
[1, 2, 3]
[1]
['h','e','l','l','o']
```