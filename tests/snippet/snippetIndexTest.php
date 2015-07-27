<?php

use App\Snippet;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class snippetIndexTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test the login page
     *
     * @return void
     */
    public function testPageNOTAuthenticated()
    {
        $this->visit(route('snippet.index'))
             ->dontsee('>New Snippet<');
    }

    /**
     * Test all informations are presents on the page
     *
     * @return void
     */
    public function testPageAuthenticated()
    {
        $user = factory('App\User')->create();

        $this->actingAs($user)
             ->visit(route('snippet.index'))
             ->see('>New Snippet<')
             ->see('Search for a snippet');
    }

    /**
     * When a snippet is created, we should see it in the list.
     *
     * @return void
     */
    public function testSnippetInfos()
    {

        $snippet = new Snippet;
        $snippet->description = "MyDescriptionTest";
        $snippet->namespace = "testNamespace";
        $snippet->content = "MyContentTest{console.log(1337);}";
        $snippet->save();

        $this->visit(route('snippet.index'))
             ->see($snippet->description)
             ->see($snippet->content)
             ->see($snippet->namespace)
             ->see($this->getHtmlId($snippet->id))
        ;
    }

    /**
     * Test all the snippets are well shown
     *
     * @return void
     */
    public function testMANYSnippetsListed()
    {
        factory('App\Snippet', 10)->create()->each(function ($snippet) {
            $snippet->save();
        });
        for ($id = 1; $id <= 10; $id++) {
            $this->visit(route('snippet.index'))
                 ->see($this->getHtmlId($id));
        }

    }

    /**
     * What the method do
     *
     * @return void
     */
    private function getHtmlId($id)
    {
        return 'id="snippet-' . $id . '"';
    }
}
