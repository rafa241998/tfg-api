<?php

use App\Favorite;
use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            for ($j = 1; $j < 3; $j++) {
                Favorite::create([  'product_id' => $j,
                'user_id' => $i,
                ]);
            }

        }
    }
}
