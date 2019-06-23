<?php

use Illuminate\Database\Seeder;

class AnneescolairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $anneescoalire = [
            [
                'anneescolaire' => '2018-2019',
                'created_at' => \Carbon\Carbon::now(),
                'datedebut' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'datefin' => \Carbon\Carbon::now(),
                'platform'  => 'academic',
                'active' => true,
                'user_id' => 1
            ],[
                'anneescolaire' => '2018-2019',
                'created_at' => \Carbon\Carbon::now(),
                'datedebut' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'datefin' => \Carbon\Carbon::now(),
                'platform'  => 'academic',
                'active' => true,
                'user_id' => 1
            ]

        ];

        \Illuminate\Support\Facades\DB::table('anneescolaires')->insert($anneescoalire);
    }
}
