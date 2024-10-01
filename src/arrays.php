<?php

if (!function_exists('array_at')) {
    /**
     * Get the nth value from an array.
     *
     * @param array $array
     * @param int $index
     *
     * @return mixed
     */
    function array_at(array $array, int $index)
    {
        if ($index < 0) {
            $index = count($array) + $index;
        }
        if ($index < 0 || $index >= count($array)) {
            return null;
        }
        return $array[array_keys($array)[$index]];
    }
}

if (!function_exists('array_deflate')) {
    /**
     * Flattens a nested array into a single level array.
     *
     * By default, it will keep the keys but use a dot notation to indicate depth.
     *
     * @param array $array
     * @param bool $keys
     *
     * @return array
     */
    function array_deflate(array $array, bool $keys = true): array
    {
        $results = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                foreach (array_deflate($value) as $k => $v) {
                    $results[$key.'.'.$k] = $v;
                }
            } else {
                $results[$key] = $value;
            }
        }
        return $keys ? $results : array_values($results);
    }
}

if (!function_exists('array_except')) {
    /**
     * Return a subset of the array by passing in an array of keys to discard
     *
     * @param array $array
     * @param array $keys
     *
     * @return array
     */
    function array_except(array $array, array $keys): array
    {
        return array_diff_key($array, array_flip($keys));
    }
}

if (!function_exists('array_exists')) {
    /**
     * Determine if a key exists in an array using dot notation for nested sets
     *
     * @param array $array
     * @param string|int $key
     *
     * @return bool
     *
     * @see array_key_exists()
     * @link https://www.php.net/manual/en/function.array-key-exists.php
     */
    function array_exists(array $array, $key): bool
    {
        foreach (explode('.', $key) as $key) {
            if (!is_array($array) || !array_key_exists($key, $array)) {
                return false;
            }
            $array = &$array[$key];
        }
        return true;
    }
}

if (!function_exists('array_first')) {
    /**
     * Get the first value from an array
     *
     * @param array $array
     *
     * @return mixed
     */
    function array_first(array $array)
    {
        $array1 = array_slice($array, 0, 1);
        return array_pop($array1);
    }
}

if (!function_exists('array_from')) {
    /**
     * Attempt to convert the input into an array
     *
     * @param mixed $data
     *
     * @return array
     */
    function array_from($data): array
    {
        if (is_array($data)) {
            return $data;
        }
        if (is_string($data)) {
            return str_split($data);
        }
        if ($data instanceof JsonSerializable) {
            return $data->jsonSerialize();
        }
        if ($data instanceof Traversable) {
            return iterator_to_array($data);
        }
        return (array) $data;
    }
}

if (!function_exists('array_from_query')) {
    /**
     * Convert a URL query string to an array
     *
     * @param string $query
     *
     * @return array
     */
    function array_from_query(string $query): array
    {
        parse_str($query, $array);
        return $array;
    }
}

if (!function_exists('array_get')) {
    /**
     * Get a value from the array using dot notation for nested sets
     *
     * @param array $array
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    function array_get(array $array, string $key, $default = null)
    {
        foreach (explode('.', $key) as $key) {
            if (!isset($array[$key])) {
                return $default;
            }
            $array = &$array[$key];
        }
        return $array;
    }
}

if (!function_exists('array_inflate')) {
    /**
     * Expands a flattened array back into a nested array.
     *
     * This will not work on flattened arrays where the keys were not kept.
     *
     * @param array $array
     *
     * @return array
     */
    function array_inflate(array $array): array
    {
        $results = [];
        foreach ($array as $key => $value) {
            array_set($results, $key, $value);
        }
        return $results;
    }
}

if (!function_exists('array_is_list')) {
    /**
     * Checks whether a given array is a list
     *
     * Determines if the given array is a list. An array is considered a list if its keys consist of consecutive numbers from 0 to count($array)-1.
     *
     * @param array $array
     *
     * @return bool
     */
    function array_is_list(array $array): bool
    {
        return $array === array_values($array);
    }
}

if (!function_exists('array_join')) {
    /**
     * Join the elements of the array together as a string connected by a substring.
     *
     * An optional second parameter can be used as a final string
     *
     * @param array $array
     * @param string $glue
     * @param string|null $finalGlue
     *
     * @return string
     */
    function array_join(array $array, string $glue = '', ?string $finalGlue = null): string
    {
        if ($finalGlue === null || count($array) <= 1) {
            return implode($glue, $array);
        }
        $last = array_pop($array);
        return implode($finalGlue, [implode($glue, $array), $last]);
    }
}

if (!function_exists('array_key_at')) {
    /**
     * Get the nth key from an array.
     *
     * @param array $array
     * @param int $index
     *
     * @return int|string|null
     */
    function array_key_at(array $array, int $index)
    {
        if ($index < 0) {
            $index = count($array) + $index;
        }
        return array_keys($array)[$index] ?? null;
    }
}

if (!function_exists('array_last')) {
    /**
     * Get the last value from an array
     *
     * @param array $array
     *
     * @return mixed
     */
    function array_last(array $array)
    {
        $array1 = array_slice($array, -1, 1);
        return array_pop($array1);
    }
}

if (!function_exists('array_only')) {
    /**
     * Return a subset of the array by passing in an array of keys to keep
     *
     * @param array $array
     * @param array $keys
     *
     * @return array
     */
    function array_only(array $array, array $keys): array
    {
        return array_intersect_key($array, array_flip($keys));
    }
}

if (!function_exists('array_pull')) {
    /**
     * Return and remove a value from the array using dot notation for nested sets
     *
     * @param array &$array
     * @param string $key
     *
     * @return mixed
     */
    function array_pull(array &$array, string $key)
    {
        $keys = explode('.', $key);
        $final = array_pop($keys);
        foreach ($keys as $key) {
            if (!isset($array[$key])) {
                return null;
            }
            $array = &$array[$key];
        }
        $value = $array[$final] ?? null;
        unset($array[$final]);
        return $value;
    }
}

if (!function_exists('array_random')) {
    /**
     * Picks one or more random entries out of an array, and returns the value (or values) of the random entries.
     *
     * @param array $array
     * @param int $num
     *
     * @return mixed|array
     */
    function array_random(array $array, int $num = 1)
    {
        $key = empty($array) || $num > count($array) ? null : @array_rand($array, $num);
        if ($key === null) {
            return null;
        }
        if (is_array($key)) {
            return array_only($array, $key);
        }
        return $array[$key];
    }
}

if (!function_exists('array_set')) {
    /**
     * Set a value in the array using dot notation for nested sets
     *
     * @param array &$array
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    function array_set(array &$array, string $key, $value)
    {
        foreach (explode('.', $key) as $key) {
            $array = &$array[$key];
        }
        $array = $value;
    }
}

if (!function_exists('array_to_query')) {
    /**
     * Convert an array to a URL query string
     *
     * @param array $array
     *
     * @return string
     */
    function array_to_query(array $array): string
    {
        return http_build_query($array, '', '&', PHP_QUERY_RFC3986);
    }
}

if (!function_exists('array_unset')) {
    /**
     * Remove a value from the array using dot notation for nested sets
     *
     * @param array &$array
     * @param string $key
     *
     * @return void
     */
    function array_unset(array &$array, string $key)
    {
        $keys = explode('.', $key);
        $final = array_pop($keys);
        foreach ($keys as $key) {
            if (!isset($array[$key])) {
                return;
            }
            $array = &$array[$key];
        }
        unset($array[$final]);
    }
}
