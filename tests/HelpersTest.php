<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function test_str_contains()
    {
        $this->assertTrue(str_contains('Laravel', 'Lara'));
    }

    /**
     * @dataProvider arrayFirstData
     *
     * @param $array
     * @param callable|null $callback
     * @param $expected
     */
    public function test_array_first($array, callable $callback = null, $expected): void
    {
        $actual = array_first($array, $callback);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function arrayFirstData(): array
    {
        return [
            [
                [1,2,3],
                function ($value) {
                    return $value > 2;
                },
                3
            ],
            [
                [1,2,3],
                function ($value) {
                    return $value > 3;
                },
                null
            ],
            [
                [1, 2, 3, 'a'],
                function ($value) {
                    return is_string($value);
                },
                'a'
            ],
            [
                [1 => 'a', 2 => 'b', 3 => 'c'],
                function ($value, $key) {
                    return ($key === 3);
                },
                'c'
            ],
            [
                [1 => 'a', 2 => 'a', 3 => 3],
                function ($value) {
                    return is_int($value);
                },
                3
            ],
            [
                [1,2,3],
                null,
                1
            ],
        ];
    }
}
