<?php

namespace Kusabi\Native\Benchmarks;

use function array_only;

class ArrayOnlyBench extends Bench
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

    public function benchOnlyFew()
    {
        array_only($this->array, ['a', 'b', 'c', 'd']);
    }

    public function benchOnlyMany()
    {
        array_only($this->array, ['a', 'b', 'c', 'd', 'e', 'f']);
    }

    public function benchOnlyNone()
    {
        array_only($this->array, []);
    }
}
