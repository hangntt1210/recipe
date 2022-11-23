<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            ['id' => 1, 'name' => '米'],
            ['id' => 2, 'name' => '卵'],
            ['id' => 3, 'name' => '豚肉'],
            ['id' => 4, 'name' => 'きゅうり'],
            ['id' => 5, 'name' => 'にんじん'],
            ['id' => 6, 'name' => 'もち粉'],
            ['id' => 7, 'name' => 'トマト'],
            ['id' => 8, 'name' => 'ブン'],
            ['id' => 9, 'name' => 'ヌクマム'],
            ['id' => 10, 'name' => 'レタス'],
            ['id' => 11, 'name' => 'シソ'],
            ['id' => 12, 'name' => '鳥肉'],
            ['id' => 13, 'name' => 'チリソース'],
            ['id' => 14, 'name' => 'ケチャップ'],
            ['id' => 15, 'name' => 'パン粉'],
            ['id' => 16, 'name' => '豌豆'],
            ['id' => 17, 'name' => 'ソーセージ'],
            ['id' => 18, 'name' => '砂糖'],
        ]);
    }
}
