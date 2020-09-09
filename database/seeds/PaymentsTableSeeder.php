<?php

use App\Payment;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([  'order_id' => 1,
                             'user_id' => 1,
                             'code'=> 123123123,
                             'type'=> 'credit',
                             'status'=> 'success',
                        ]);
    }
}
