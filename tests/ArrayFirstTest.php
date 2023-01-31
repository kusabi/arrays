<?php

namespace Kusabi\Native\Tests;

use function array_get;
use function array_set;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_first
 * @group array_first
 */
class ArrayFirstTest extends TestCase
{
    public function testEmptyArrayReturnsNull()
    {
        $array = [];
        $this->assertSame(null, array_first($array));
    }

    public function testOneEntry()
    {
        $array = [99];
        $this->assertSame(99, array_first($array));
    }

    public function testOriginalArrayIsUntouched()
    {
        $array = [1, 2, 3, 4];
        $this->assertSame(1, array_first($array));
        $this->assertEquals([1, 2, 3, 4], $array);
    }

    public function testCursorIndependent()
    {
        $array = [1, 2, 3, 4];
        next($array);
        $this->assertSame(1, array_first($array));
    }
}
