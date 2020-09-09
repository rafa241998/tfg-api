<?php

use App\CartItem;
use Illuminate\Database\Seeder;

class CartItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CartItem::create(
            [
                'cart_id' => 1,
                'color_size_id'=> 1,
                'quantity' => 1,
                'price' => 15.99,
            ]
        );
    }
}
