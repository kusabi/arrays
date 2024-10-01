## Description

Convert an array to a URL query string

```php
array_to_query(array $array): string
```

## Parameters

**array**

The input array

## Returns

Returns a url query string that represents the array

## Examples

**Example # 1 Simple array**

```php
$array = ['name' => 'john', 'password' => 'doe'];
print_r(array_to_query($array));
```

The above example will output:

```
name=john&password=doe
```


**Example # 2 Nested array**

```php
$array = [
    'users' => [
        [
            'name' => 'John', 
            'password' => 'd03'
        ], 
        [
            'name' => 'Peter', 
            'password' => 'R8bb1t'
        ]
    ]
];
print_r(array_to_query($array));
```

The above example will output:

```
users%5B0%5D%5Bname%5D=John&users%5B0%5D%5Bpassword%5D=d03&users%5B1%5D%5Bname%5D=Peter&users%5B1%5D%5Bpassword%5D=R8bb1t
```