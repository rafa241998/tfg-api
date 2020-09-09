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
        Address::create(
            [
                'user_id' => 1,
                'line1' => 'Calle Doctor Sapena, 51',
                'line2' => 'Muelle de Levante',
                'postal_code'=> '03013',
                'city'=> 'Alicante',
                'country'=> 'España',
                'phone_number'=> 636874263,
            ]
        );
    }
}
