<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            Address::create(
                [
                    'user_id' => $i,
                    'line1' => 'Calle'.$i,
                    'postal_code'=> 'Calle'.$i,
                    'city'=> 'Ciudad'.$i,
                    'country'=> 'Pais'.$i,
                    'phone_number'=> 123123123,
                ]
            );
        }
    }
}
