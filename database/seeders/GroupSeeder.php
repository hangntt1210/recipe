<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            ['id' => 1, 'name' => 'スープ'],
            ['id' => 2, 'name' => '甘いもの'],
            ['id' => 3, 'name' => 'ファーストフード'],
            ['id' => 4, 'name' => 'ラーメン'],
            ['id' => 5, 'name' => '他'],
        ]);
    }
}
