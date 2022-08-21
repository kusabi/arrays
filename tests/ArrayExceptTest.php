<?php

namespace Kusabi\Native\Tests;

use function array_except;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_except
 * @group dot
 * @group array_except
 */
class ArrayExceptTest extends TestCase
{
    public function testEmpty()
    {
        $array = [];
        $this->assertSame([], array_except($array, ['a', 'b']));
    }

    public function testAll()
    {
        $array = ['a' => 1, 'b' => 2];
        $this->assertSame([], array_except($array, ['a', 'b']));
    }

    public function testSome()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        $this->assertSame(['c' => 3], array_except($array, ['a', 'b']));
    }

    public function testCaseSensitive()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        $this->assertSame(['b' => 2, 'c' => 3], array_except($array, ['a', 'B']));
    }
}
