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
            User::create([  'first_name' => 'Usuario'.$i,
                            'last_name' => 'Usuario'.$i,
                            'email'=> 'Usuario'.$i.'@gmail.com',
                            'password'=> Hash::make('123456'),
                            'phone_number'=> 'Usuario'.$i,
                        ]);
        }

    }
}
