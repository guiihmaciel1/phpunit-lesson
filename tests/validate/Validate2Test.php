<?php

namespace tests\validate;

use phpunit\Framework\TestCase;


class Validate2Test extends TestCase
{
    public function test_if_not_validate()
    {
        $this->assertfalse(false);
    }
    
}