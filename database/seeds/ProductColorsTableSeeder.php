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
                if ($j == 1){
                    ProductColor::create(
                        [
                            'product_id' => $i,
                            'color_id' => $j,
                            'image' => 'app\public\images\camisa_cuadros_corta.jpg',
                            'active' => 1,
                        ]
                    );
                }else if($j == 2){
                    ProductColor::create(
                        [
                            'product_id' => $i,
                            'color_id' => $j,
                            'image' => 'app\public\images\camisa_lisa_corta.jpg',
                            'active' => 1,
                        ]
                    );
                }else if($j == 3){
                    ProductColor::create(
                        [
                            'product_id' => $i,
                            'color_id' => $j,
                            'image' => 'app\public\images\camisa_velcro.jpg',
                            'active' => 1,
                        ]
                    );
                }
            }
        }
    }
}
