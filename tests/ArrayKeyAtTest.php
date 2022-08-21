<?php

namespace Kusabi\Native\Tests;

use function array_key_at;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_key_at
 * @group reading
 * @group array_key_at
 */
class ArrayKeyAtTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertSame(null, array_key_at([], 0));
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
        $this->assertSame('a', array_key_at($array, 0));
        $this->assertSame('b', array_key_at($array, 1));
        $this->assertSame('c', array_key_at($array, 2));
        $this->assertSame('d', array_key_at($array, 3));
        $this->assertSame('e', array_key_at($array, 4));
        $this->assertSame(null, array_key_at($array, 5));
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
        $this->assertSame('e', array_key_at($array, -1));
        $this->assertSame('d', array_key_at($array, -2));
        $this->assertSame('c', array_key_at($array, -3));
        $this->assertSame('b', array_key_at($array, -4));
        $this->assertSame('a', array_key_at($array, -5));
        $this->assertSame(null, array_key_at($array, -6));
    }
}
