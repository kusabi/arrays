<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \array_from
 * @group creating
 * @group array_from
 */
class ArrayFromTest extends TestCase
{
    public function testArray()
    {
        $array = [1, 2, 3, 4, 5, 'a', 'b', 'c', 'd'];
        $created = array_from($array);
        $this->assertSame($array, $created);
    }

    public function testInteger()
    {
        $this->assertSame([1], array_from(1));
    }

    public function testJsonSerializable()
    {
        $array = [1, 2, 3, 4, 5, 'a', 'b', 'c', 'd'];
        $serializable = $this->createMock(\JsonSerializable::class);
        $serializable->method('jsonSerialize')->willReturn($array);
        $created = array_from($serializable);
        $this->assertSame($array, $created);
    }

    public function testString()
    {
        $this->assertSame(['h', 'e', 'l', 'l', 'o'], array_from('hello'));
    }

    public function testTraversable()
    {
        $array = [1, 2, 3, 4, 5, 'a', 'b', 'c', 'd'];
        $traversable = new \ArrayObject($array);
        $created = array_from($traversable);
        $this->assertSame($array, $created);
    }
}
