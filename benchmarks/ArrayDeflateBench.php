<?php

namespace Kusabi\Native\Benchmarks;

use function array_deflate;

/**
 * @BeforeMethods({"init"})
 */
class ArrayDeflateBench extends Bench
{
    protected $array;

    protected $deflatedArray;

    protected $nestedArray;

    public function benchDeflateNestedDiscardKeys()
    {
        array_deflate($this->nestedArray, false);
    }

    public function benchDeflateNestedKeepKeys()
    {
        array_deflate($this->nestedArray);
    }

    public function benchDeflateNotNestedDiscardKeys()
    {
        array_deflate($this->array, false);
    }

    public function benchDeflateNotNestedKeepKeys()
    {
        array_deflate($this->array);
    }

    public function init()
    {
        $this->array = array_combine(range('a', 'i'), range(1, 9));
        $this->nestedArray = [
            'a' => 1,
            'b' => 2,
            'c' => [
                'a' => 1,
                'b' => 2,
                'c' => [
                    'a' => 1,
                    'b' => 2,
                    'c' => 3
                ]
            ]
        ];
    }
}
