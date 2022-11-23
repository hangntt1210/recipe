<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            ['id' => 1, 'group_id' => 1, 'user_id' => 1,'title' => 'ブンチャー', 'description' => null, 'image' => 'bun-cha-ha-noi.jpg', 'video' => null, 'time' => 45, 'level' => 2, 'status' => 1],
            ['id' => 2, 'group_id' => 2, 'user_id' => 1,'title' => 'バインチョイ', 'description' => null, 'image' => 'banh-troi-nuoc.jpg', 'video' => null, 'time' => 15, 'level' => 1, 'status' => 1],
        ]);
    }
}
