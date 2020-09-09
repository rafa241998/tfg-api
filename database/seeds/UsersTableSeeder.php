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

        User::create([  'first_name' => 'TFG',
                            'last_name' => 'Example',
                            'email'=> 'tfg@example.com',
                            'password'=> Hash::make('tfg12345'),
                            'phone_number'=> 636872165,
                        ]);

    }
}
