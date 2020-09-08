<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        //User::truncate();

        for ($i = 1; $i < 4; $i++) {
            User::create([  'first_name' => 'rafa'.$i,
                            'last_name' => 'rafa'.$i,
                            'email'=> 'rafa'.$i,
                            'password'=> Hash::make('1'),
                            'phone_number'=> 'Usuario'.$i,
                        ]);
        }

    }
}
