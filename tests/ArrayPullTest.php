<?php

namespace Kusabi\Native\Tests;

use function array_pull;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_pull
 * @group dot
 * @group array_pull
 */
class ArrayPullTest extends TestCase
{
    public function testNotFound()
    {
        $array = [];
        $value = array_pull($array, 'a');
        $this->assertSame(null, $value);
        $this->assertSame([], $array);

        $array = [];
        $value = array_pull($array, 'a.a.a');
        $this->assertSame(null, $value);
        $this->assertSame([], $array);

        $array = ['a' => 1];
        $value = array_pull($array, 'b');
        $this->assertSame(null, $value);
        $this->assertSame(['a' => 1], $array);
    }

    public function testNotNested()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        $value = array_pull($array, 'a');
        $this->assertSame(1, $value);
        $this->assertSame(['b' => 2, 'c' => 3], $array);
        $value = array_pull($array, 'c');
        $this->assertSame(3, $value);
        $this->assertSame(['b' => 2], $array);
        $value = array_pull($array, 'b');
        $this->assertSame(2, $value);
        $this->assertSame([], $array);
    }

    public function testNested()
    {
        $array = [
            'a' => [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ],
            'b' => [
                'a' => [
                    'a' => 1,
                    'b' => 2,
                    'c' => 3
                ],
                'b' => 2,
                'c' => 3
            ],
            'c' => [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ]
        ];
        $value = array_pull($array, 'b.a.a');
        $this->assertSame(1, $value);
        $this->assertSame($array, [
            'a' => [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ],
            'b' => [
                'a' => [
                    'b' => 2,
                    'c' => 3
                ],
                'b' => 2,
                'c' => 3
            ],
            'c' => [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ]
        ]);
        $value = array_pull($array, 'b.a');
        $this->assertSame([
            'b' => 2,
            'c' => 3
        ], $value);
        $this->assertSame($array, [
            'a' => [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ],
            'b' => [
                'b' => 2,
                'c' => 3
            ],
            'c' => [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ]
        ]);
        $value = array_pull($array, 'c');
        $this->assertSame([
            'a' => 1,
            'b' => 2,
            'c' => 3
        ], $value);
        $this->assertSame($array, [
            'a' => [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ],
            'b' => [
                'b' => 2,
                'c' => 3
            ]
        ]);
    }
}
