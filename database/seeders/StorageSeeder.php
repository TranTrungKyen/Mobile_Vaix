<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('storages')->insert([
            ['name' => '8GB'],
            ['name' => '16GB'],
            ['name' => '64GB'],
            ['name' => '128GB'],
            ['name' => '256GB'],
            ['name' => '512GB'],
            ['name' => '1TB'],
        ]);
    }
}
