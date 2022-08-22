## Description

Join array elements with a string and optional string for the last item

```php
array_join(array $array, string $glue = '', string $finalGlue = null): string
```

## Parameters

**array**

The input array

**glue**

The string to glue each item together with.

**finalGlue**

The string to glue the last item. Uses the first glue parameter when not set.

## Returns

Returns a string containing a string representation of all the array elements in the same order, with the separator string between each element.

## Examples

**Example # 1 Example uses of array_join() using no glue**

```php
$array = ['lastname', 'email', 'phone'];
echo array_join($array);
```

The above example will output:

```
lastnameemailphone
```

**Example # 2 Example uses of array_join() using first glue**

```php
$array = ['lastname', 'email', 'phone'];
echo array_join($array, ', ');
```

The above example will output:

```
lastname, email, phone
```

**Example # 3 Example uses of array_join() using first glue and final glue**

```php
$array = ['lastname', 'email', 'phone'];
echo array_join($array, ', ', ' and ');
```

The above example will output:

```
lastname, email and phone
```