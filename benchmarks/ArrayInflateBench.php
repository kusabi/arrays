<?php

namespace Kusabi\Native\Benchmarks;

use function array_inflate;

class ArrayInflateBench extends Bench
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

    protected $deflatedArray = [
        'a' => 1,
        'b' => 2,
        'c.a' => 1,
        'c.b' => 2,
        'c.c.a' => 1,
        'c.c.b' => 2,
        'c.c.c' => 3,
    ];

    public function benchInflateNestedKeys()
    {
        array_inflate($this->deflatedArray);
    }

    public function benchInflateNoNestedKeys()
    {
        array_inflate($this->array);
    }
}
