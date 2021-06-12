<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'role_id' => 1,
            'name' => 'Mr. Author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('rootauthor')
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'role_id' => 2,
            'name' => 'Mr. User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('rootuser')
        ]);
    }
}
