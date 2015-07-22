<?php

class registerTest extends TestCase
{
    /**
     * Test that the register form exists
     *
     * @return void
     */
    public function testRegisterFormExists()
    {
        $this->visit('/auth/register')
             ->see('Register');
    }
}
