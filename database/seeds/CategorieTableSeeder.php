<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'libelle' => 'U6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ],[
                'libelle' => 'U8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ],
            [
                'libelle' => 'U10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ],
            [
                'libelle' => 'U12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ],
            [
                'libelle' => 'U14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ],[
                'libelle' => 'U16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ],[
                'libelle' => 'U18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1
            ]

        ];

      DB::table('categories')->insert($categories);
    }
}
