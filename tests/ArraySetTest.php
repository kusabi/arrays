<?php

namespace Kusabi\Native\Tests;

use function array_set;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_set
 * @group dot
 * @group array_set
 */
class ArraySetTest extends TestCase
{
    public function testBranching()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e', 1);
        array_set($array, 'a.b.c.e.e', 2);
        $this->assertSame($array, [
            'a' => [
                'b' => [
                    'c' => [
                        'd' => [
                            'e' => 1
                        ],
                        'e' => [
                            'e' => 2
                        ]
                    ]
                ]
            ]
        ]);
    }

    public function testEmptyString()
    {
        $array = [];
        array_set($array, '', 1);
        $this->assertSame($array, [
            '' => 1
        ]);
    }

    public function testMultipleDeep()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e.f.g.h.i.j.k.l', 1);
        array_set($array, 'b.b.c.d.e.f.g.h.i.j.k.l', 2);
        array_set($array, 'c.b.c.d.e.f.g.h.i.j.k.l', 3);
        array_set($array, 'd.b.c.d.e.f.g.h.i.j.k.l', 4);
        $this->assertSame($array, [
            'a' => [
                'b' => [
                    'c' => [
                        'd' => [
                            'e' => [
                                'f' => [
                                    'g' => [
                                        'h' => [
                                            'i' => [
                                                'j' => [
                                                    'k' => [
                                                        'l' => 1
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'b' => [
                'b' => [
                    'c' => [
                        'd' => [
                            'e' => [
                                'f' => [
                                    'g' => [
                                        'h' => [
                                            'i' => [
                                                'j' => [
                                                    'k' => [
                                                        'l' => 2
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'c' => [
                'b' => [
                    'c' => [
                        'd' => [
                            'e' => [
                                'f' => [
                                    'g' => [
                                        'h' => [
                                            'i' => [
                                                'j' => [
                                                    'k' => [
                                                        'l' => 3
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'd' => [
                'b' => [
                    'c' => [
                        'd' => [
                            'e' => [
                                'f' => [
                                    'g' => [
                                        'h' => [
                                            'i' => [
                                                'j' => [
                                                    'k' => [
                                                        'l' => 4
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }

    public function testMultipleShallow()
    {
        $array = [];
        array_set($array, 'a', 1);
        array_set($array, 'b', 2);
        array_set($array, 'c', 3);
        array_set($array, 'd', 4);
        array_set($array, 'e', 5);
        array_set($array, 'f', 6);
        array_set($array, 'g', 7);
        array_set($array, 'h', 8);
        $this->assertSame($array, [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
            'e' => 5,
            'f' => 6,
            'g' => 7,
            'h' => 8,
        ]);
    }

    public function testSingleDeep()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e.f.g.h.i.j.k.l', 1);
        $this->assertSame($array, [
            'a' => [
                'b' => [
                    'c' => [
                        'd' => [
                            'e' => [
                                'f' => [
                                    'g' => [
                                        'h' => [
                                            'i' => [
                                                'j' => [
                                                    'k' => [
                                                        'l' => 1
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }

    public function testSingleShallow()
    {
        $array = [];
        array_set($array, 'a', 1);
        $this->assertSame($array, [
            'a' => 1
        ]);
    }
}
