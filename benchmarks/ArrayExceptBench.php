<?php

namespace Kusabi\Native\Benchmarks;

use function array_except;

class ArrayExceptBench extends Bench
{
    protected $array = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
    ];

    public function benchExceptFew()
    {
        array_except($this->array, ['a', 'b', 'c', 'd']);
    }

    public function benchExceptMany()
    {
        array_except($this->array, ['a', 'b', 'c', 'd', 'e', 'f']);
    }

    public function benchExceptNone()
    {
        array_except($this->array, []);
    }
}
