<?php
use Illuminate\Foundation\Testing\DatabaseTransactions;

class registerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test that the register form exists
     *
     * @return void
     */
    public function testRegisterFormExists()
    {
        $this->visit('/auth/register')
             ->see('Name')
             ->see('Email')
             ->see('Password')
             ->see('Confirm Password')
             ->see('Register');
    }

    /**
     * Test the register page in case of success
     *
     * @return void
     */
    public function testRegsiterSuccess()
    {
        $this->visit('/auth/register')
             ->type('snipp', 'name')
             ->type('test@snipp.com', 'email')
             ->type('qwerty', 'password')
             ->type('qwerty', 'password_confirmation')
             ->press('Register')
             ->seePageIs('/snippet');
    }

    /**
     * Test the register page in case of fail
     *
     * @dataProvider registerDataFail
     * @return void
     */
    public function testRegisterFail($name, $email, $password, $password_confirmation, $expected)
    {
        $this->visit('/auth/register')
             ->type($name, 'name')
             ->type($email, 'email')
             ->type($password, 'password')
             ->type($password_confirmation, 'password_confirmation')
             ->press('Register')
             ->see($expected)
             ->seePageIs('/auth/register');}

    /**
     * Dataprodvider for testRegisterFail
     *
     * @return void
     */
    public function registerDataFail()
    {
        return array(
            array('test', '', 'qwerty', 'qwerty', 'The email field is required.'),
            array('test', 'test@snipp.com', '', '', 'The password field is required.'),
            array('test', '//////', 'qwerty', 'qwerty', 'The email must be a valid email address.'),
            array('test', 'dev@snipp.com', 'qwerty', 'qwerty', 'The email has already been taken.'),
            array('test', 'test@snipp.com', 'qwerty', 'ytrewq', 'The password confirmation does not match.'),
        );
    }

}
