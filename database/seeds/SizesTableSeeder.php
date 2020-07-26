<?php

use App\Size;
use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(
            [
                'size' => 'S',
            ]
        );
        Size::create(
            [
                'size' => 'M',
            ]
        );
        Size::create(
            [
                'size' => 'L',
            ]
        );
        Size::create(
            [
                'size' => 'XL',
            ]
        );
    }
}
