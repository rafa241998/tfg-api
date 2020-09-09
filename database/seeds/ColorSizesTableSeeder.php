<?php

use App\ColorSize;
use Illuminate\Database\Seeder;

class ColorSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 12; $i++) {
            ColorSize::create(
                [
                    'product_color_id' => $i,
                    'size_id' => 1,
                    'quantity' => 99,
                ]
            );
            ColorSize::create(
                [
                    'product_color_id' => $i,
                    'size_id' => 2,
                    'quantity' => 99,
                ]
            );
            ColorSize::create(
                [
                    'product_color_id' => $i,
                    'size_id' => 3,
                    'quantity' => 99,
                ]
            );
            ColorSize::create(
                [
                    'product_color_id' => $i,
                    'size_id' => 4,
                    'quantity' => 99,
                ]
            );
        }

    }
}
