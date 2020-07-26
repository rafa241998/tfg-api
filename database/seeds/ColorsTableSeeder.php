<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Color::create(
                [
                    'color' => 'azul',
                ]
            );
            Color::create(
                [
                    'color' => 'rojo',
                ]
            );
            Color::create(
                [
                    'color' => 'amarillo',
                ]
            );
            Color::create(
                [
                    'color' => 'verde',
                ]
            );

    }
}
