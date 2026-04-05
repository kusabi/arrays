# Coding Standards


This library follows [PSR-1](https://www.php-fig.org/psr/psr-1/) & [PSR-2](https://www.php-fig.org/psr/psr-2/) standards.


# Unit Tests

Before pushing any changes, please ensure the unit tests are all passing.

If possible, feel free to improve coverage in a separate commit.

```bash
vendor/bin/phpunit
```

or

```bash
composer run test
```

# Code sniffer

Before pushing, please ensure you have run the code sniffer. **Only run it using the lowest support PHP version (7.2)**

```bash
vendor/bin/php-cs-fixer fix
```

or

```bash
composer run fix
```

# Static Analyses

Before pushing, please ensure you have run the static analyses tool.

```bash
vendor/bin/phan
```

or

```bash
composer run static
```

# Benchmarks

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

or

```bash
composer run bench
```