<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'iPhone',
            ],
            [
                'name' => 'iPad',
            ],
            [
                'name' => 'Apple Watch',
            ],
            [
                'name' => 'Xiaomi',
            ],
            [
                'name' => 'Samsung',
            ],
            [
                'name' => 'Realme',
            ],
            [
                'name' => 'VSmart',
            ],
            [
                'name' => 'Phụ kiện đồ chơi',
            ],
            [
                'name' => 'Tin tức',
            ],
        ]);
    }
}
