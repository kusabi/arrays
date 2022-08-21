<?php

namespace Kusabi\Native\Tests;

use function array_inflate;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_inflate
 * @group dot
 * @group array_inflate
 */
class ArrayInflateTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertSame([], array_inflate([]));
    }

    public function testNestedKeys()
    {
        $array = [
            'a' => 1,
            'b' => 2,
            'c.a' => 1,
            'c.b' => 2,
            'c.c.a' => 1,
            'c.c.b' => 2,
            'c.c.c' => 3,
        ];
        $this->assertSame([
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
        ], array_inflate($array));
    }

    public function testNoNestedKeys()
    {
        $array = [
            'a' => 1,
            'b' => 2,
            'c' => 3
        ];
        $this->assertSame([
            'a' => 1,
            'b' => 2,
            'c' => 3
        ], array_inflate($array));
    }

    public function testReversesDeflate()
    {
        $array = [
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
        $this->assertSame([
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
        ], array_inflate(array_deflate($array)));
    }
}
