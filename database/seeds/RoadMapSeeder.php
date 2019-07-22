<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoadMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roadmap')->insert([
            "description" => 'Research and Development on ETPS System 
                              Pre-ICO project Idea: ETPS Platform -> DDK Platform 
                              Execute Business Plan to meet all requirements.',
            "icon" => 'r1.png',
            "date" => 'Q3|2015',
        ]);
        DB::table('roadmap')->insert([
            "description" => 'Develop Pre-ICO platform (ETPS) ',
            "icon" => 'r2.png',
            "date" => 'Q4 | 2015'
        ]);

        DB::table('roadmap')->insert([
            "description" => 'Marketing Activities & Organize Events worldwide
                              Develop Security Improvement
                              Launched ETPS & DNC Exchange
                              Created ICE MICE for exchangers',
            "icon" => 'r2.png',
            "date" => 'Q2 | 2016'
        ]);

        DB::table('roadmap')->insert([
            "description" => 'Established in Singapore 
                              Gala Dinner Community appreciation',
            "icon" => 'r3.png',
            "date" => 'Q3 | 2016'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'Awarded as the Most Innovative Gold Fintech Provider at the China Forex Expo at Shenzhen, China',
            "icon" => 'r4.png',
            "date" => 'Q4 | 2016'
        ]);


        DB::table('roadmap')->insert([
            "description" => 'Participated in The North American Bitcoin Conference in Miami on the topic, Crypto in Southeast Asia. 
                              Participated in the IFX Expo Asia in Hong Kong  
                              Joined the World Blockchain Forum in Dubai',
            "icon" => 'r9.png',
            "date" => 'Q1 | 2017'
        ]);


        DB::table('roadmap')->insert([
            "description" => 'Upgrade DNC Exchange (UBW London changed to UBW Singapore)  
                              Upgrade the Security  
                              Joined the Brussels Parliament on the topic of The Future of Blockchain
                              Our co-founder was awarded with Anugerah Tun Putih organized by Srikandi  Malaysia',
            "icon" => 'r9.png',
            "date" => 'Q2 | 2017'
        ]);


        DB::table('roadmap')->insert([
            "description" => 'Awarded as Champion of Swiss Innovation Challenge (SIC) Asia 
                              Participated in the World Blockchain Forum, London ',
            "icon" => 'r6.png',
            "date" => 'Q3 | 2017'
        ]);


        DB::table('roadmap')->insert([
            "description" => 'DDK Platform Development 
                              Participated in the IT Pro Expo Japan, Singapore Fintech Festival 
                              Joined the World Blockchain Summit in Dubai
                              Penetrate London Market & Japan Market',
            "icon" => 'r8.png',
            "date" => 'Q4 | 2017'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'Development of interface for DDK 
                              Study the legal part of DDK 
                              Tested DPoS System 
                              Tested Voting System 
                              Preparation of DDK Documentation V1.0 ',
            "icon" => 'r9.png',
            "date" => 'Q1 | 2018'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'DDK Web Wallet pre-introduction
                              Release of DDK Documentation v1.0
                              Pre-ICO Finished
                              Migrate Pre-ICO to DDKoin
                              Develop DDK desktop wallet & DDK forum',
            "icon" => 'r10.png',
            "date" => 'Q2 | 2018'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'DDK Web Wallet tested and launched
                              DDK migration View
                              DDK registered in Global Exchanger
                              Listed on Coin Market Cap
                              Open source code & Public GitHub',
            "icon" => 'r11.png',
            "date" => 'Q3 | 2018'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'Start developing DDK Mobile Apps wallet 
                                DDK Asset Issuing (DAI) 
                                Remote Procedure Call ',
            "icon" => 'r12.png',
            "date" => 'Q4 | 2018'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'SDK Development 
                              Launch DDK Mobile Apps wallet
                              Improve system security
                              DDK Worldwide Expansion
                              Integrating DDK as payment for merchant store',
            "icon" => 'r13.png',
            "date" => 'Q1 | 2019'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'Start development of Decentralized Crypto Exchange 
                              Reputation System 
                              Launch Decentralized Crypto Exchange ',
            "icon" => 'r14.png',
            "date" => 'Q1 | 2020'
        ]);
        DB::table('roadmap')->insert([
            "description" => 'SmartBridge Partnership (Multi Blockchain) 
                              Push Button deploy blockchain 
                              DDK Supply expected to reach 45 Million ',
            "icon" => 'r15.png',
            "date" => 'Q1 | 2028'
        ]);



    }
}
