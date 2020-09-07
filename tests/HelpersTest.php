<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * We don't accept new tests because the behavior is already tested
 * for the class equivalents in the laravel/framework repository.
 */
class HelpersTest extends TestCase
{
    public function test_autoloading()
    {
        $this->assertTrue(str_contains('Laravel', 'Lara'));
    }
}
