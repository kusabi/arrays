# Extensions to PHP native arrays

![Tests](https://github.com/kusabi/arrays/workflows/quality/badge.svg)
[![codecov](https://codecov.io/gh/kusabi/arrays/branch/main/graph/badge.svg)](https://codecov.io/gh/kusabi/arrays)
[![Licence Badge](https://img.shields.io/github/license/kusabi/arrays.svg)](https://img.shields.io/github/license/kusabi/arrays.svg)
[![Release Badge](https://img.shields.io/github/release/kusabi/arrays.svg)](https://img.shields.io/github/release/kusabi/arrays.svg)
[![Tag Badge](https://img.shields.io/github/tag/kusabi/arrays.svg)](https://img.shields.io/github/tag/kusabi/arrays.svg)
[![Issues Badge](https://img.shields.io/github/issues/kusabi/arrays.svg)](https://img.shields.io/github/issues/kusabi/arrays.svg)
[![Code Size](https://img.shields.io/github/languages/code-size/kusabi/arrays.svg?label=size)](https://img.shields.io/github/languages/code-size/kusabi/arrays.svg)

<sup>A library that extends PHP's native array functionality</sup>

## Compatibility and dependencies

This library is compatible with PHP version `7.2`, `7.3`, `7.4`, `8.0`, `8.1`, `8.2`, `8.3` and `8.4`

This library has no dependencies.

## Installation

Installation is simple using composer.

```bash
composer require kusabi/arrays
```

Or simply add it to your `composer.json` file

```json
{
    "require": {
        "kusabi/arrays": "^1.0"
    }
}
```

## Contributing

This library follows [PSR-1](https://www.php-fig.org/psr/psr-1/) & [PSR-2](https://www.php-fig.org/psr/psr-2/) standards.


#### Unit Tests

Before pushing any changes, please ensure the unit tests are all passing.

If possible, feel free to improve coverage in a separate commit.

```bash
vendor/bin/phpunit
```

#### Code sniffer

Before pushing, please ensure you have run the code sniffer. **Only run it using the lowest support PHP version (7.2)**

```bash
vendor/bin/php-cs-fixer fix
```

#### Static Analyses

Before pushing, please ensure you have run the static analyses tool.

```bash
vendor/bin/phan
```

#### Benchmarks

Before pushing, please ensure you have checked the benchmarks and ensured that your code has not introduced any slowdowns.

Feel free to speed up existing code, in a separate commit.

Feel free to add more benchmarks for greater coverage, in a separate commit.

```bash
vendor/bin/phpbench run --report=speed
vendor/bin/phpbench run --report=speed --output=markdown
vendor/bin/phpbench run --report=speed --filter=benchNetFromTax --iterations=50 --revs=50000

vendor/bin/phpbench xdebug:profile
vendor/bin/phpbench xdebug:profile --gui
```

## Documentation

This library adds a number of array functions to extend PHP's native functionality

Below you can find links to the documentation for the new features.

| Function                                              | Description                                                                                               |
|-------------------------------------------------------|-----------------------------------------------------------------------------------------------------------|
| [array_at](documentation/array_at.md)                 | Get the nth value from an array                                                                           |
| [array_deflate](documentation/array_deflate.md)       | Flattens a nested array into a single level array                                                         |
| [array_except](documentation/array_except.md)         | Return a subset of the array by passing in an array of keys to discard                                    |
| [array_exists](documentation/array_exists.md)         | Checks if the given key or index exists in the array using dot notation for nested arrays                 |
| [array_first](documentation/array_first.md)           | Get the first item from the array                                                                         |
| [array_from](documentation/array_from.md)             | Attempt to convert an input into an array                                                                 |
| [array_from_query](documentation/array_from_query.md) | Convert a URL query string to an array                                                                    |
| [array_get](documentation/array_exists.md)            | Returns a value from the array, using dot notation for nested sets                                        |
| [array_inflate](documentation/array_inflate.md)       | Expands a flattened array back into a nested array                                                        |
| [array_is_list](documentation/array_is_list.md)       | Checks whether a given array is a list                                                                    |
| [array_join](documentation/array_join.md)             | Joins entries of array into a string using optional glue substring and optional final glue substring      |
| [array_key_at](documentation/array_key_at.md)         | Get the nth key from an array                                                                             |
| [array_last](documentation/array_last.md)             | Get the last entry in the array                                                                           |
| [array_only](documentation/array_only.md)             | Return a subset of the array by passing in an array of keys to keep                                       |
| [array_pull](documentation/array_pull.md)             | Return and remove a key in the array using dot notation for nested arrays                                 |
| [array_random](documentation/array_random.md)         | Picks one or more random entries out of an array, and returns the value (or values) of the random entries |
| [array_set](documentation/array_set.md)               | Set a key in the array using dot notation for nested arrays                                               |
| [array_to_query](documentation/array_to_query.md)     | Convert an array to a URL query string                                                                    |
| [array_unset](documentation/array_unset.md)           | Remove a key in the array using dot notation for nested arrays                                            |