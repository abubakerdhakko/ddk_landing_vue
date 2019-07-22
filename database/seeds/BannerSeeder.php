<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main')->insert([
            'heading' => "BE THE FUTURE BY OUR INNOVATION",
            'description' => "DDK DPOS with ready decentralized autonomous community provide you the ease of financial services including exchange and rewards in Blockchain.",
            'progress_percent' => 50
        ]);
    }
}
