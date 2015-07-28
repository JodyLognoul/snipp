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
             ->see('Tags:')
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
    public function testSubmitWithErrorFails($description, $namespace, $tags, $language, $public, $content, $expected)
    {
        $this->actingAs($this->getUser())
             ->visit(route('snippet.create'))
             ->type($description, 'description')
             ->type($namespace, 'namespace')
             ->type($tags, 'tags')
             ->type($language, 'language')
             ->type($public, 'public')
             ->type($content, 'content')
             ->press('Create the snippet')
             ->see($expected)
             ->seePageIs(route('snippet.create'))
        ;
    }

    /**
     * Test the login page
     *
     * @return void
     */
    public function testSubmitSuccess()
    {
        $this->actingAs($this->getUser())
             ->visit(route('snippet.create'))
             ->type('descriptionTest', 'description')
             ->type('namespaceTest', 'namespace')
             ->type('tagsTest', 'tags')
             ->type('markdown', 'language')
             ->type(true, 'public')
             ->type('contentTest', 'content')
             ->press('Create the snippet')
             ->see('Snippet well created.')
             ->seePageIs(route('snippet.index'))
        ;
    }

    /**
     * Create data Dataprovider
     *
     * $description, $namespace, $tags, $language, $public, $content, $expected
     *
     * @return void
     */
    public function createDataFail()
    {
        return array(
            array('Description', 'namespaceTest', 'tagsTest', 'markdown', true, '', 'The content field is required.'),
            array('Description', 'namespaceTest', '', 'markdown', true, 'contentTest', 'The tags field is required.'),
            array('Description', '', 'tagsTest', 'markdown', true, 'contentTest', 'The namespace field is required.'),
            array('', 'namespaceTest', 'tagsTest', 'markdown', true, 'Content', 'The description field is required.'),
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
