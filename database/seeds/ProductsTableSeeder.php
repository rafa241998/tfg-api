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

        Product::create(
            [
                'category_id' => 1,
                'title' => 'Camisa manga larga estampada',
                'description' => 'Adaptada a personas con movilidad reducida gracias a su obertura posterior.',
                'price' => 32.00,
                'image' => 'app\public\images\manga_larga\manga_larga_azul.jpg',
            ]
        );

        Product::create(
            [
                'category_id' => 1,
                'title' => 'Camisa manga larga con cuello estampada',
                'description' => 'Camiseta 100% algodon con cuello de punto',
                'price' => 27.00,
                'image' => 'app\public\images\manga_larga_cuello\manga_larga_cuello_lila.jpg',
            ]
        );

        Product::create(
            [
                'category_id' => 1,
                'title' => 'Camiseta lisa manga corta',
                'description' => 'Camiseta de algodón grueso de diversos colores',
                'price' => 10.00,
                'image' => 'app\public\images\manga_corta\manga_corta_azul.jpg',
            ]
        );


    }
}
