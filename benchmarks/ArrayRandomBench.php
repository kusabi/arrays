<?php

namespace Kusabi\Native\Benchmarks;

use function array_random;

class ArrayRandomBench extends Bench
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

    public function benchRandomMultiple()
    {
        array_random($this->array, 5);
    }

    public function benchRandomSingle()
    {
        array_random($this->array);
    }
}
