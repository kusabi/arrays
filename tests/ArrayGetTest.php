<?php

namespace Kusabi\Native\Tests;

use function array_get;
use function array_set;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_get
 * @group dot
 * @group array_get
 */
class ArrayGetTest extends TestCase
{
    public function testEmptyString()
    {
        $array = [];
        array_set($array, '', 1);
        $this->assertSame(1, array_get($array, ''));
    }

    public function testMultipleDeep()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e.f.g.h.i.j.k.l', 1);
        array_set($array, 'b.b.c.d.e.f.g.h.i.j.k.l', 2);
        array_set($array, 'c.b.c.d.e.f.g.h.i.j.k.l', 3);
        array_set($array, 'd.b.c.d.e.f.g.h.i.j.k.l', 4);

        $this->assertSame(1, array_get($array, 'a.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame(2, array_get($array, 'b.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame(3, array_get($array, 'c.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame(4, array_get($array, 'd.b.c.d.e.f.g.h.i.j.k.l'));
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

        $this->assertSame(1, array_get($array, 'a'));
        $this->assertSame(2, array_get($array, 'b'));
        $this->assertSame(3, array_get($array, 'c'));
        $this->assertSame(4, array_get($array, 'd'));
        $this->assertSame(5, array_get($array, 'e'));
        $this->assertSame(6, array_get($array, 'f'));
        $this->assertSame(7, array_get($array, 'g'));
        $this->assertSame(8, array_get($array, 'h'));
    }

    public function testNotFoundReturnsDefault()
    {
        $array = [];
        $this->assertSame(null, array_get($array, 'a'));
        $this->assertSame(1, array_get($array, 'a', 1));

        array_set($array, 'a', 1);
        $this->assertSame(null, array_get($array, 'b'));
        $this->assertSame(1, array_get($array, 'b', 1));
    }

    public function testSingleDeep()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e.f.g.h.i.j.k.l', 1);
        $this->assertSame(1, array_get($array, 'a.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame([
            'k' => [
                'l' => 1
            ]
        ], array_get($array, 'a.b.c.d.e.f.g.h.i.j'));
    }

    public function testSingleShallow()
    {
        $array = [];
        array_set($array, 'a', 1);
        $this->assertSame(1, array_get($array, 'a'));
    }
}
