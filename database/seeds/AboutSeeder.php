<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'description' => "DDK is a community platform aiming to create economic opportunities through the development of blockchain solutions. Since 2015, our community has enthusiastically contributed to a number of blockchain platforms including Universal Blockchain Wallet (UBW), Blockchains.My (BCMY), Blockchains.My Merchant Application, BCMY NFC Smart Card and DinarCoin (DNC). The community network has actively spread across a number of countries including Malaysia, Singapore, Cambodia, Vietnam, Thailand, Indonesia, Brunei, Philippines, Japan, Yemen, USA and other countries worldwide. Presently, our community has 46 leading teams. 

DDK platform is an another venture of our amazing team which uses the Delegated Proof of Stake (DPoS) consensus as a core of its blockchain platform. One of the major advantages of a DPoS blockchain is that it depends on community members to participate in the maintenance and security of the platform in a way that each member’s participation provides benefit for all.

Through DDK platform, our objective is to provide economic opportunity for our community members and continue to innovate and contribute to build blockchain solutions.
"
        ]);
    }
}
