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
        DB::table('users')->insert([
            'name' => env('USER_USERNAME'),
            'email' => env('USER_EMAIL'),
            'password' => bcrypt(env('USER_PASSWORD')),
        ]);
    }
}
