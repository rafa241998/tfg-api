<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {

            Order::create(
                [
                    'user_id' => $i,
                    'address_id' => $i,
                    'status'=> 'complete',
                    'subTotal'=> '13.54',
                    'shipping'=> '3.45',
                    'total'=> '16.99',
                    'details'=> 'Detalles'.$i,
                ]
            );
        }
    }
}
