<?php

namespace Kusabi\Native\Tests;

use function array_random;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_random
 * @group reading
 * @group array_random
 */
class ArrayRandomTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertSame(null, array_random([]));
    }

    public function testMultiple()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
        $random = array_random($array, 3);
        $this->assertTrue(is_array($random));
        $this->assertCount(3, $random);
    }

    public function testSingle()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
        $random = array_random($array);
        $this->assertTrue(is_int($random));
    }

    public function testTooMany()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
        $random = array_random($array, 5);
        $this->assertSame(null, $random);
    }
}
