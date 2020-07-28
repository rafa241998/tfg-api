<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 3; $i++) {
            for ($j = 1; $j < 4; $j++) {
                Product::create(
                    [
                        'category_id' => $i,
                        'title' => 'producto'.$j,
                        'description' => 'descripcion'.$j,
                        'price' => 15.99,
                        'image' => 'app\public\images\shirt.jpg',
                    ]
                );
            }
        }
    }
}
