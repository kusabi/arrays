<?php

namespace Kusabi\Native\Benchmarks;

/**
 * @BeforeMethods({"init"})
 */
class ArrayFindBench extends Bench
{
    protected $array;

    public function benchFindKey()
    {
        // array_find is O(n) - no interest in testing that O(10) os quicker than O(10,000), that's obvious
        array_find($this->array, function ($value, $key) {
            return $key > 10;
        });
    }

    public function benchFindValue()
    {
        // array_find is O(n) - no interest in testing that O(10) os quicker than O(10,000), that's obvious
        array_find($this->array, function ($value) {
            return $value > 10;
        });
    }

    public function init()
    {
        $this->array = range(0, 10000);
    }
}
