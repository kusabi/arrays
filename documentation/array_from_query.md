## Description

Convert a URL query string to an array

```php
array_from_query(string $query): array
```

## Parameters

**string**

The input query string

## Returns

Returns an array that represents the parameters of the query string

## Examples

**Example # 1 Basic array**

```php
print_r(array_from_query('name=john&password=doe'));
```

The above example will output:

```
Array
(
    [name] => john
    [password] => doe
)

```


**Example # 2 Nested array**

```php
print_r(array_from_query('users%5B0%5D%5Bname%5D=John&users%5B0%5D%5Bpassword%5D=d03&users%5B1%5D%5Bname%5D=Peter&users%5B1%5D%5Bpassword%5D=R8bb1t'));
```

The above example will output:

```
Array
(
    [users] => Array
        (
            [0] => Array
                (
                    [name] => John
                    [password] => d03
                )
            [1] => Array
                (
                    [name] => Peter
                    [password] => R8bb1t
                )
        )
)
```