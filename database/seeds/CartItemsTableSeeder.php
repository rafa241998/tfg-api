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
        for ($i = 1; $i < 4; $i++) {
            for ($j = 1; $j < 4; $j++) {
                CartItem::create(
                    [
                        'cart_id' => $i,
                        'color_size_id'=> $i+$j,
                        'quantity' =>$i+2,
                        'price' => 15.99,
                    ]
                );
            }
        }
    }
}
