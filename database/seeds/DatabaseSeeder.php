<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutListSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(RoadMapSeeder::class);
        $this->call(TokenSaleSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrdersSeeder::class);
    }
}
