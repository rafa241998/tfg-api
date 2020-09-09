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
            //1
            Color::create(
                [
                    'color' => 'azul_claro_1',
                    'hex' => '#b2c2d9',
                ]
            );
            //2
            Color::create(
                [
                    'color' => 'rojo_1',
                    'hex' => '#d51a23',
                ]
            );
            //3
            Color::create(
                [
                    'color' => 'azul_oscuro_1',
                    'hex' => '#4e72be',
                ]
            );
            //4
            Color::create(
                [
                    'color' => 'rosa_1',
                    'hex' => '#fe6ba1',
                ]
            );
            //5
            Color::create(
                [
                    'color' => 'amarillo_1',
                    'hex' => '#f6da76',
                ]
            );
            //6
            Color::create(
                [
                    'color' => 'lila_1',
                    'hex' => '#6c4d91',
                ]
            );
            //7
            Color::create(
                [
                    'color' => 'azul_claro_2',
                    'hex' => '#54add9',
                ]
            );
            //8
             Color::create(
                [
                    'color' => 'lila_2',
                    'hex' => '#94a0d2',
                ]
            );
             //9
             Color::create(
                [
                    'color' => 'negro_1',
                    'hex' => '#25212f',
                ]
            );
            //10
             Color::create(
                [
                    'color' => 'rosa_2',
                    'hex' => '#f195be',
                ]
            );
    }
}
