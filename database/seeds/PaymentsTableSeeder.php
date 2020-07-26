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
        for ($i = 1; $i < 4; $i++) {
            Payment::create([  'order_id' => $i,
                             'user_id' => $i,
                             'code'=> 123123123,
                             'type'=> 'credit',
                             'status'=> 'success',
                        ]);
        }
    }
}
