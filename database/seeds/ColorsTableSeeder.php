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
                    'hex' => '#6cc0b4',
                ]
            );
            Color::create(
                [
                    'color' => 'azul',
                    'hex' => '#7195b3',
                ]
            );
            Color::create(
                [
                    'color' => 'beis',
                    'hex' => '#c29b91',
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
