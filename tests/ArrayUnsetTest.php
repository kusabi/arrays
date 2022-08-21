<?php

namespace Kusabi\Native\Tests;

use function array_unset;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_unset
 * @group dot
 * @group array_unset
 */
class ArrayUnsetTest extends TestCase
{
    public function testNotFound()
    {
        $array = [];
        array_unset($array, 'a');
        $this->assertSame([], $array);

        $array = [];
        array_unset($array, 'a.a.a');
        $this->assertSame([], $array);

        $array = ['a' => 1];
        array_unset($array, 'b');
        $this->assertSame(['a' => 1], $array);
    }

    public function testNotNested()
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        array_unset($array, 'a');
        $this->assertSame(['b' => 2, 'c' => 3], $array);
        array_unset($array, 'c');
        $this->assertSame(['b' => 2], $array);
        array_unset($array, 'b');
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
        array_unset($array, 'b.a.a');
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
        array_unset($array, 'b.a');
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
        array_unset($array, 'c');
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
