<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Category::create(
            [
                'title' => 'Pantalones',
                'description' =>'Pantalones para mujeres',
                'gender' => 'W',
                'image' => 'img',
            ]

        );
        Category::create(
            [
                'title' => 'Pantalones',
                'description' =>'Pantalones para hombre',
                'gender' => 'M',
                'image' => 'img',
            ]
        );

    }
}
