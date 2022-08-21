<?php

namespace Kusabi\Native\Tests;

use function array_only;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_only
 * @group dot
 * @group array_only
 */
class ArrayOnlyTest extends TestCase
{
    public function testEmpty()
    {
        $array = [];
        $this->assertSame([], array_only($array, ['a', 'b']));
    }

    public function testAll()
    {
        $array = ['a' => 1, 'b' => 2];
        $this->assertSame(['a' => 1, 'b' => 2], array_only($array, ['a', 'b']));
    }

    public function testSome()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        $this->assertSame(['a' => 1, 'b' => 2], array_only($array, ['a', 'b']));
    }

    public function testCaseSensitive()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        $this->assertSame(['a' => 1], array_only($array, ['a', 'B']));
    }
}
