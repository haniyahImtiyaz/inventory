<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name'  => 'Drawing Book',
                'product_code'  => 'DB-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Notebook',
                'product_code' => 'NB-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Pensil Case',
                'product_code' => 'PC-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Pencil 2B',
                'product_code' => 'P2B-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Ruler 30cm',
                'product_code' => 'R30-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Eraser',
                'product_code' => 'E-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Black Pen',
                'product_code' => 'BkB-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Blue Pen',
                'product_code' => 'BlP-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Small Glue',
                'product_code' => 'GS-01',
                'product_stock' => rand(0, 100)
            ],
            [
                'product_name' => 'Whiteboard Marker',
                'product_code' => 'WM-01',
                'product_stock' => rand(0, 100)
            ]
        ]);
    }
}
