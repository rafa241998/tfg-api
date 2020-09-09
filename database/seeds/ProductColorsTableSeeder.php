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
        //Manga Larga
        ProductColor::create(
            [
                'product_id' => 1,
                'color_id' => 1,
                'image' => 'app\public\images\manga_larga\manga_larga_azul.jpg',
                'active' => 1,
            ]
        );

        ProductColor::create(
            [
                'product_id' => 1,
                'color_id' => 2,
                'image' => 'app\public\images\manga_larga\manga_larga_roja.jpg',
                'active' => 1,
            ]
        );

        ProductColor::create(
            [
                'product_id' => 1,
                'color_id' => 3,
                'image' => 'app\public\images\manga_larga\manga_larga_azul_oscuro.jpg',
                'active' => 1,
            ]
        );

        ProductColor::create(
            [
                'product_id' => 1,
                'color_id' => 4,
                'image' => 'app\public\images\manga_larga\manga_larga_rosa.jpg',
                'active' => 1,
            ]
        );
        //Manga larga cuello
        ProductColor::create(
            [
                'product_id' => 2,
                'color_id' => 5,
                'image' => 'app\public\images\manga_larga_cuello\manga_larga_cuello_amarilla.jpg',
                'active' => 1,
            ]
        );
        ProductColor::create(
            [
                'product_id' => 2,
                'color_id' => 3,
                'image' => 'app\public\images\manga_larga_cuello\manga_larga_cuello_azul.jpg',
                'active' => 1,
            ]
        );
        ProductColor::create(
            [
                'product_id' => 2,
                'color_id' => 6,
                'image' => 'app\public\images\manga_larga_cuello\manga_larga_cuello_lila.jpg',
                'active' => 1,
            ]
        );
        //Manga corta
        ProductColor::create(
            [
                'product_id' => 3,
                'color_id' => 7,
                'image' => 'app\public\images\manga_corta\manga_corta_azul.jpg',
                'active' => 1,
            ]
        );
        ProductColor::create(
            [
                'product_id' => 3,
                'color_id' => 8,
                'image' => 'app\public\images\manga_corta\manga_corta_lila.jpg',
                'active' => 1,
            ]
        );
        ProductColor::create(
            [
                'product_id' => 3,
                'color_id' => 9,
                'image' => 'app\public\images\manga_corta\manga_corta_negra.jpg',
                'active' => 1,
            ]
        );
        ProductColor::create(
            [
                'product_id' => 3,
                'color_id' => 10,
                'image' => 'app\public\images\manga_corta\manga_corta_rosa.jpg',
                'active' => 1,
            ]
        );
    }
}
