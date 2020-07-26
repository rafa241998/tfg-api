<?php

use App\Product;
use App\ProductColor;
use Illuminate\Database\Seeder;

class ProductColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            for ($j = 1; $j < 4; $j++) {
                ProductColor::create(
                    [
                        'product_id' => $i,
                        'color_id' => $j,
                        'image' => 'img',
                        'active' => 1,
                    ]
                );
            }
        }
    }
}
