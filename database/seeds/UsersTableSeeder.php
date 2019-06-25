<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'name' => 'AMIA Thierry Stéphane',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);*/

        $anneescoalire = [
            [
                'anneescolaire' => '2018-2019',
                'created_at' => Carbon::now(),
                'datedebut' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'datefin' => Carbon::now(),
                'platform'  => 'academic',
                'active' => true,
                'user_id' => 1
            ],[
                'anneescolaire' => '2018-2019',
                'created_at' => Carbon::now(),
                'datedebut' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'datefin' => Carbon::now(),
                'platform'  => 'academic',
                'active' => true,
                'user_id' => 1
            ]

        ];

        DB::table('anneescolaires')->insert($anneescoalire);
    }
}
