<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the root user
        DB::table('users')->insert([
            'name' => env('USER_USERNAME'),
            'email' => env('USER_EMAIL'),
            'password' => bcrypt(env('USER_PASSWORD')),
        ]);

        // Create some dummy users
        factory('App\User', 10)->create()->each(function ($u) {
            $u->save();
        });
    }
}
