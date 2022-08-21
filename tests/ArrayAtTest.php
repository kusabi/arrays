<?php

namespace Kusabi\Native\Tests;

use function array_at;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_at
 * @group reading
 * @group array_at
 */
class ArrayAtTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertSame(null, array_at([], 0));
    }

    public function testBasicForwards()
    {
        $array = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
            'e' => 5,
        ];
        $this->assertSame(1, array_at($array, 0));
        $this->assertSame(2, array_at($array, 1));
        $this->assertSame(3, array_at($array, 2));
        $this->assertSame(4, array_at($array, 3));
        $this->assertSame(5, array_at($array, 4));
        $this->assertSame(null, array_at($array, 5));
    }

    public function testBasicBackwards()
    {
        $array = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
            'e' => 5,
        ];
        $this->assertSame(5, array_at($array, -1));
        $this->assertSame(4, array_at($array, -2));
        $this->assertSame(3, array_at($array, -3));
        $this->assertSame(2, array_at($array, -4));
        $this->assertSame(1, array_at($array, -5));
        $this->assertSame(null, array_at($array, -6));
    }
}
