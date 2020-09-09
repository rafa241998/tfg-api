<?php

use App\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create(
            [
                'user_id' => 1,
                'address_id' => 1,
                'status'=> 'complete',
                'subTotal'=> '13.54',
                'shipping'=> '3.45',
                'total'=> '16.99',
                'details'=> 'null',
                'orderDate'=> Carbon::parse('2020-08-01'),
            ]
        );
    }
}
