<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone X1',
                'description' => 'A high-end smartphone with amazing features.',
                'sim_card' => 'Dual SIM',
                'cpu' => 'Octa-core 3.0 GHz',
                'pin' => '5000mAh',
                'design_style' => 'Sleek',
                'screen_resolution' => '1080x2400 pixels',
                'category_id' => 1,
            ],
            [
                'name' => 'Laptop Pro 15',
                'description' => 'A powerful laptop for professionals.',
                'sim_card' => 'Dual SIM',
                'cpu' => 'Intel i7 10th Gen',
                'pin' => '6000mAh',
                'design_style' => 'Elegant',
                'screen_resolution' => '1920x1080 pixels',
                'category_id' => 2,
            ],
            [
                'name' => 'Tablet Max 10',
                'description' => 'An affordable tablet with great performance.',
                'sim_card' => 'Single SIM',
                'cpu' => 'Quad-core 2.5 GHz',
                'pin' => '7000mAh',
                'design_style' => 'Compact',
                'screen_resolution' => '1280x800 pixels',
                'category_id' => 3,
            ],
        ]);
    }
}
