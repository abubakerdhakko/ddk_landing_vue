<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_links')->insert([
            "facebook" => 'https://www.facebook.com/DDKoin_Official-437883973356520/?modal=admin_todo_tour',
            'instagram' =>'https://www.instagram.com/ddkoin/?hl=en',
            'linkedin' =>'https://www.linkedin.com/in/ddk-koin-702a47168/',
            'telegram' =>'https://t.me/ddkoin_official',
            'reddit' =>'https://www.reddit.com/user/DirhamDinarKoin',
            'quora' =>'https://www.quora.com/profile/DDK-Koin',
            'stackoverflow' =>'https://stackoverflow.com/users/10093957/ddk',

        ]);
    }
}
