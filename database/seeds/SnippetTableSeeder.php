<?php

use Illuminate\Database\Seeder;

class SnippetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create some dummy users
        factory('App\Snippet', 10)->create()->each(function ($snippet) {
            $snippet->save();
        });
    }
}
