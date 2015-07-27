<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class snippetCreateTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Test authentication require
     *
     * @return void
     */
    public function testPageNOTAuthenticated()
    {
        $this->visit(route('snippet.create'))
             ->dontsee('value="Create the snippet"');
    }

    /**
     * Test all informations are presents on the page
     *
     * @return void
     */
    public function testPageAuthenticated()
    {
        $this->actingAs($this->getUser())
             ->visit(route('snippet.create'))
             ->see('value="Create the snippet"')
             ->see('Description:')
             ->see('Namespace:')
             ->see('Language:')
             ->see('Public or private:')
             ->see('Content:')
             ->see('List of snippets')
        ;
    }

    /**
     * Should fail if submit with errors
     *
     * @dataProvider createDataFail
     * @return void
     */
    public function testSubmitWithErrorFails($description, $language, $public, $content, $expected)
    {
        $this->actingAs($this->getUser())
             ->visit(route('snippet.create'))
             ->type($description, 'description')
             ->type($language, 'language')
             ->type($public, 'public')
             ->type($content, 'content')
             ->press('Create the snippet')
             ->see($expected)
             ->seePageIs(route('snippet.create'))
        ;
    }

    /**
     * Create data Dataprovider
     *
     * @return void
     */
    public function createDataFail()
    {
        return array(
            array('Description', 'markdown', true, '', 'The content field is required.'),
            array('', 'markdown', true, 'Content', 'The description field is required.'),
        );
    }

    /**
     * What the method do
     *
     * @return void
     */
    private function getUser()
    {
        return factory('App\User')->create();
    }

}
