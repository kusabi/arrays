## Description

Determines if the given array is a list. An array is considered a list if its keys consist of consecutive numbers from 0 to count($array)-1.

```php
array_is_list(array $array): bool
```

## Parameters

**array**

The array being evaluated.

## Returns

Returns true if array is a list, false otherwise.

## Examples

**Example # 1 Example uses of array_is_list()**

```php
<?php

array_is_list([]); // true
array_is_list(['apple', 2, 3]); // true
array_is_list([0 => 'apple', 'orange']); // true

// The array does not start at 0
array_is_list([1 => 'apple', 'orange']); // false

// The keys are not in the correct order
array_is_list([1 => 'apple', 0 => 'orange']); // false

// Non-integer keys
array_is_list([0 => 'apple', 'foo' => 'bar']); // false

// Non-consecutive keys
array_is_list([0 => 'apple', 2 => 'bar']); // false
?>
```