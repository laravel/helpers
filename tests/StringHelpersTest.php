<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class StringHelpersTest extends TestCase
{
    public function test_str_contains()
    {
        $this->assertTrue(str_contains('Laravel', 'Lara'));
    }
}
