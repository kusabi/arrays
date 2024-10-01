<?php

namespace Kusabi\Native\Tests;

use function array_unset;
use PHPUnit\Framework\TestCase;

/**
 * @covers \array_to_query
 * @group convert
 * @group array_to_query
 */
class ArrayToQueryTest extends TestCase
{
    public static function provideExamples(): array
    {
        return [
            'empty' => [[], ''],
            'list' => [['1', '2', '3'], '0=1&1=2&2=3'],
            'hashmap' => [['name' => 'John', 'password' => 'd03'], 'name=John&password=d03'],
            'nested' => [['user' => ['name' => 'John', 'password' => 'd03']], 'user%5Bname%5D=John&user%5Bpassword%5D=d03'],
            'super-nested' => [['users' => [['name' => 'John', 'password' => 'd03'], ['name' => 'Peter', 'password' => 'R8bb1t']]], 'users%5B0%5D%5Bname%5D=John&users%5B0%5D%5Bpassword%5D=d03&users%5B1%5D%5Bname%5D=Peter&users%5B1%5D%5Bpassword%5D=R8bb1t']
        ];
    }

    public static function provideInvertExamples(): array
    {
        return ArrayFromQueryTest::provideExamples();
    }

    /**
     * @dataProvider provideExamples
     */
    public function testExamples(array $input, string $expected)
    {
        $this->assertSame($expected, array_to_query($input));
    }

    /**
     * @dataProvider provideInvertExamples
     */
    public function testReverseArrayFromQuery(string $input)
    {
        $this->assertSame($input, array_to_query(array_from_query($input)));
    }
}
