<?php

namespace Kusabi\Native\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @covers \array_from_query
 * @group creating
 * @group array_from_query
 */
class ArrayFromQueryTest extends TestCase
{
    public static function provideExamples(): array
    {
        return [
            'empty' => ['', []],
            'list' => ['0=1&1=2&2=3', ['1', '2', '3']],
            'hashmap' => ['name=John&password=d03', ['name' => 'John', 'password' => 'd03']],
            'nested' => ['user%5Bname%5D=John&user%5Bpassword%5D=d03', ['user' => ['name' => 'John', 'password' => 'd03']]],
            'super-nested' => ['users%5B0%5D%5Bname%5D=John&users%5B0%5D%5Bpassword%5D=d03&users%5B1%5D%5Bname%5D=Peter&users%5B1%5D%5Bpassword%5D=R8bb1t', ['users' => [['name' => 'John', 'password' => 'd03'], ['name' => 'Peter', 'password' => 'R8bb1t']]]]
        ];
    }

    public static function provideInvertExamples(): array
    {
        return ArrayToQueryTest::provideExamples();
    }

    /**
     * @dataProvider provideExamples
     */
    public function testExamples(string $input, array $expected)
    {
        $this->assertSame($expected, array_from_query($input));
    }

    /**
     * @dataProvider provideInvertExamples
     */
    public function testReverseArrayToQuery(array $input)
    {
        $this->assertSame($input, array_from_query(array_to_query($input)));
    }
}
