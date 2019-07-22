<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokenSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('token_sale')->insert([
            "title" => 'Existing from active users (ETPS)',
            "amount" => '1710000',
            "percentage" => '3.80'
        ]);
        DB::table('token_sale')->insert([
            "title" => 'Pending ETPS group bonus',
            "amount" => '360000',
            "percentage" => '0.80'
        ]);
        DB::table('token_sale')->insert([
            "title" => 'Airdrop Rewards ',
            "amount" => '900000',
            "percentage" => '2.00'
        ]);
        DB::table('token_sale')->insert([
            "title" => 'DDK Foundation',
            "amount" => '450000',
            "percentage" => '1.00'
        ]);
        DB::table('token_sale')->insert([
            "title" => 'Reserved in Global Exchanger',
            "amount" => '450000',
            "percentage" => '1.00'
        ]);
        DB::table('token_sale')->insert([
            "title" => 'Staking rewards',
            "amount" => '41130000',
            "percentage" => '91.4'
        ]);


    }
}
