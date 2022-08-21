<?php

namespace Kusabi\Native\Tests;

use function array_exists;
use function array_set;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_exists
 * @group dot
 * @group array_exists
 */
class ArrayExistsTest extends TestCase
{
    public function testEmptyString()
    {
        $array = [];
        array_set($array, '', 1);
        $this->assertSame(true, array_exists($array, ''));
    }

    public function testMultipleDeep()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e.f.g.h.i.j.k.l', 1);
        array_set($array, 'b.b.c.d.e.f.g.h.i.j.k.l', 2);
        array_set($array, 'c.b.c.d.e.f.g.h.i.j.k.l', 3);
        array_set($array, 'd.b.c.d.e.f.g.h.i.j.k.l', 4);

        $this->assertSame(true, array_exists($array, 'a.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame(true, array_exists($array, 'b.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame(true, array_exists($array, 'c.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame(true, array_exists($array, 'd.b.c.d.e.f.g.h.i.j.k.l'));
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

        $this->assertSame(true, array_exists($array, 'a'));
        $this->assertSame(true, array_exists($array, 'b'));
        $this->assertSame(true, array_exists($array, 'c'));
        $this->assertSame(true, array_exists($array, 'd'));
        $this->assertSame(true, array_exists($array, 'e'));
        $this->assertSame(true, array_exists($array, 'f'));
        $this->assertSame(true, array_exists($array, 'g'));
        $this->assertSame(true, array_exists($array, 'h'));
    }

    public function testEmptyArray()
    {
        $array = [];
        $this->assertSame(false, array_exists($array, 'a'));

        array_set($array, 'a', 1);
        $this->assertSame(true, array_exists($array, 'a'));
        $this->assertSame(false, array_exists($array, 'b'));
    }

    public function testSingleDeep()
    {
        $array = [];
        array_set($array, 'a.b.c.d.e.f.g.h.i.j.k.l', 1);
        $this->assertSame(true, array_exists($array, 'a.b.c.d.e.f.g.h.i.j.k.l'));
        $this->assertSame(true, array_exists($array, 'a.b.c.d.e.f.g.h.i.j'));
    }

    public function testSingleShallow()
    {
        $array = [];
        array_set($array, 'a', 1);
        $this->assertSame(true, array_exists($array, 'a'));
    }
}
