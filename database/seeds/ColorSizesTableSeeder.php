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
        for ($i = 1; $i < 4; $i++) {
            for ($j = 1; $j < 4; $j++) {
                ColorSize::create(
                    [
                        'product_color_id' => $i,
                        'size_id' => $j,
                        'quantity' => 5,
                    ]
                );
            }
        }
        ColorSize::create(
            [
                'product_color_id' => 3,
                'size_id' => 4,
                'quantity' => 0,
            ]
        );
        ColorSize::create(
            [
                'product_color_id' => 2,
                'size_id' => 4,
                'quantity' => 0,
            ]
        );
    }
}
