<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id' => "1",
            'executive' => "1",
            'developers' => "1",
            'marketing' => "1",
            'support' => "1",
            'advisors' => "1",
            'created_at' => "2018-08-16 06:11:35",
            'updated_at' => "2018-08-16 04:16:06",
        ]);
    }
}
