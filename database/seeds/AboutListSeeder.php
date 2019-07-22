<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_list')->insert([
            'description' => "The Community & Blockchain Development"
        ]);
        DB::table('about_list')->insert([
            'description' => "The Platform"
        ]);
        DB::table('about_list')->insert([
            'description' => "The Roadmap"
        ]);
    }
}
