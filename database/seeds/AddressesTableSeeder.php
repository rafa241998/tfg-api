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
            for ($j = 1; $j < 4; $j++) {
                Address::create(
                    [
                        'user_id' => $i,
                        'line1' => 'Calle'.$j,
                        'postal_code'=> 'Calle'.$j,
                        'city'=> 'Ciudad'.$j,
                        'country'=> 'Pais'.$j,
                        'phone_number'=> 123123123,
                    ]
                );
            }
        }
    }
}
