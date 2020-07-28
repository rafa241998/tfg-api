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
                    'hex' => '#0000FF',
                ]
            );
            Color::create(
                [
                    'color' => 'rojo',
                    'hex' => '#FF0000',
                ]
            );
            Color::create(
                [
                    'color' => 'amarillo',
                    'hex' => '#FFFF00',
                ]
            );
            Color::create(
                [
                    'color' => 'verde',
                    'hex' => '#008000',
                ]
            );

    }
}
