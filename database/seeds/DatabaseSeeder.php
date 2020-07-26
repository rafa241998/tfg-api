<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ProductColorsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(ColorSizesTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(CartItemsTableSeeder::class);
    }
}



