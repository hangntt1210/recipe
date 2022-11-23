<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'アドミン', 'email' => 'admin@gmail.com', 'password' => bcrypt('123456'), 'status' => 0],
            ['id' => 2, 'name' => 'user1', 'email' => 'user1@gmail.com', 'password' => bcrypt('123456'), 'status' => 1],
            ['id' => 3, 'name' => 'user2', 'email' => 'user2@gmail.com', 'password' => bcrypt('123456'), 'status' => 1],
        ]);
    }
}
