<?php

class loginTest extends TestCase
{

    /**
     * Test if the login form exist
     *
     * @return void
     */
    public function testLoginFormExist()
    {
        $this->visit('/auth/login')
             ->see('Email')
             ->see('Password');
    }

    /**
     * Test the login page in case of success
     *
     * @return void
     */
    public function testLoginSuccess()
    {
        $this->visit('/auth/login')
             ->type(env('USER_EMAIL'), 'email')
             ->type(env('USER_PASSWORD'), 'password')
             ->press('Login')
             ->seePageIs('/snippet')
             ->see('Logout')
             ->see('Profile');
    }

    /**
     * Test the login page in case of fail
     *
     * @return void
     */
    public function testLoginFail()
    {
        $this->visit('/auth/login')
             ->type('qwerty', 'email')
             ->type('1337', 'password')
             ->press('Login')
             ->seePageIs('/auth/login')
             ->see('These credentials do not match our records.');
    }

}
