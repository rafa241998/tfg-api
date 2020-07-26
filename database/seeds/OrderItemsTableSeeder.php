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

        for ($i = 1; $i < 4; $i++) {
            for ($j = 1; $j < 4; $j++) {
                OrderItem::create(
                    [
                        'order_id' => $i,
                        'color_size_id' => $j + $i,
                        'quantity' => 2 + $j + $i,
                        'price' => 15.99,
                    ]
                );
            }
        }
    }
}
