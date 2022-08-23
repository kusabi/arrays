<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \array_is_list
 * @group reading
 * @group array_is_list
 */
class ArrayIsListTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertSame(true, array_is_list([]));
    }

    public function testFalse()
    {
        $this->assertSame(false, array_is_list([1 => 'apple', 'orange']));
        $this->assertSame(false, array_is_list([1 => 'apple', 0 => 'orange']));
        $this->assertSame(false, array_is_list([0 => 'apple', 'foo' => 'bar']));
        $this->assertSame(false, array_is_list([0 => 'apple', 2 => 'bar']));
    }

    public function testTrue()
    {
        $this->assertSame(true, array_is_list([1, 2, 3]));
        $this->assertSame(true, array_is_list([1, 'John', 3]));
        $this->assertSame(true, array_is_list([0 => 'apple', 'orange']));
    }
}
