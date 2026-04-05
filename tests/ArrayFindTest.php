<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers \array_find
 * @group array_find
 */
class ArrayFindTest extends TestCase
{
    public function testBasedOnKeys()
    {
        $array = [1, 2, 3, 4];
        $this->assertSame(3, array_find($array, function ($element, $key) {
            return $key === 2;
        }));
    }

    public function testEmptyArrayReturnsNull()
    {
        $array = [];
        $this->assertSame(null, array_find($array, function ($element) {
            return true;
        }));
    }

    public function testOneEntryMatched()
    {
        $array = [99];
        $this->assertSame(99, array_find($array, function ($element) {
            return $element < 100;
        }));
    }

    public function testOneEntryNotMatched()
    {
        $array = [99];
        $this->assertSame(null, array_find($array, function ($element) {
            return $element >= 100;
        }));
    }

    public function testOnlyTrueLiteralWorks()
    {
        $array = [1, 2, 3, 4];
        $this->assertSame(4, array_find($array, function ($element) {
            if ($element < 4) {
                return 1;
            }
            return true;
        }));
    }

    public function testOriginalArrayIsUntouched()
    {
        $array = [1, 2, 3, 4];
        $this->assertSame(1, array_find($array, function ($element) {
            return true;
        }));
        $this->assertEquals([1, 2, 3, 4], $array);
    }

    public function testReturnsDefaultWhenNothingFound()
    {
        $array = [1, 2, 3, 4];
        $this->assertSame('cheese', array_find($array, function ($element) {
            return $element > 100;
        }, 'cheese'));
    }

    public function testReturnsNullWhenNothingFound()
    {
        $array = [1, 2, 3, 4];
        $this->assertSame(null, array_find($array, function ($element) {
            return $element > 100;
        }));
    }
}
