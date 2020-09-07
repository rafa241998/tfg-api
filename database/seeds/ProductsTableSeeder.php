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
                if ($j == 1){
                    Product::create(
                        [
                            'category_id' => $i,
                            'title' => 'Camisa manga corta cuadros',
                            'description' => 'Nuestros tejidos a cuadros no se desvanecen. Insistimos en telas de alta calidad en todas las camisas de nuestros hombres.',
                            'price' => 34.00,
                            'image' => 'app\public\images\camisa_cuadros_corta.jpg',
                        ]
                    );
                }else if($j == 2){
                    Product::create(
                        [
                            'category_id' => $i,
                            'title' => 'Camisa manga corta lisa',
                            'description' => 'descripcion'.$j,
                            'price' => 29.00,
                            'image' => 'app\public\images\camisa_lisa_corta.jpg',
                        ]
                    );
                }else if($j == 3){
                    Product::create(
                        [
                            'category_id' => $i,
                            'title' => 'Camisa manga corta belcro',
                            'description' => 'descripcion'.$j,
                            'price' => 36.00,
                            'image' => 'app\public\images\camisa_velcro.jpg',
                        ]
                    );
                }
            }
        }
    }
}
