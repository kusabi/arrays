<?php

namespace Kusabi\Native\Tests;

use ArrayIterator;
use ArrayObject;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_from
 * @group creating
 * @group array_from
 */
class ArrayFromTest extends TestCase
{
    public static function provideCommonConversions(): array
    {
        return [
            'null' => [null, []],
            'false' => [false, [false]],
            'true' => [true, [true]],
            'integer' => [1, [1]],
            'float' => [12.34, [12.34]],
            'string' => ['hello', ['h', 'e', 'l', 'l', 'o']],
            'array' => [[1, 2, 3, 4, 5, 'a', 'b', 'c', 'd'], [1, 2, 3, 4, 5, 'a', 'b', 'c', 'd']],
            'iterator' => [new ArrayIterator([1, 2, 3]), [1, 2, 3]],
            'traversable' => [new ArrayObject([1, 2, 3]), [1, 2, 3]],
        ];
    }

    /**
     * @dataProvider provideCommonConversions
     */
    public function testCommonConversions($input, $expected)
    {
        $this->assertSame($expected, array_from($input));
    }

    public function testJsonSerializable()
    {
        $array = [1, 2, 3, 4, 5, 'a', 'b', 'c', 'd'];
        $serializable = $this->createMock(\JsonSerializable::class);
        $serializable->method('jsonSerialize')->willReturn($array);
        $created = array_from($serializable);
        $this->assertSame($array, $created);
    }
}
