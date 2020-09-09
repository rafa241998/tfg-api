<?php

use App\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        OrderItem::create(
            [
                'order_id' => 1,
                'color_size_id' => 1,
                'quantity' => 1,
                'price' => 15.99,
            ]
        );
    }
}
