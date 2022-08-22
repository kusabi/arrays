<?php

namespace Kusabi\Native\Tests;

use function array_at;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_join
 * @group reading
 * @group array_join
 */
class ArrayJoinTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertSame('', array_join([]));
        $this->assertSame('', array_join([], ', '));
        $this->assertSame('', array_join([], ', ', ' and '));
    }

    public function testOneItem()
    {
        $this->assertSame('a', array_join(['a']));
        $this->assertSame('a', array_join(['a'], ', '));
        $this->assertSame('a', array_join(['a'], ', ', ' and '));
    }

    public function testTwoItems()
    {
        $this->assertSame('ab', array_join(['a', 'b']));
        $this->assertSame('a, b', array_join(['a', 'b'], ', '));
        $this->assertSame('a and b', array_join(['a', 'b'], ', ', ' and '));
    }

    public function testThreeItems()
    {
        $this->assertSame('abc', array_join(['a', 'b', 'c']));
        $this->assertSame('a, b, c', array_join(['a', 'b', 'c'], ', '));
        $this->assertSame('a, b and c', array_join(['a', 'b', 'c'], ', ', ' and '));
    }

    public function testFourItems()
    {
        $this->assertSame('abcd', array_join(['a', 'b', 'c', 'd']));
        $this->assertSame('a, b, c, d', array_join(['a', 'b', 'c', 'd'], ', '));
        $this->assertSame('a, b, c and d', array_join(['a', 'b', 'c', 'd'], ', ', ' and '));
    }
}
