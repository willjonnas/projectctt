<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sectors')->insert([

            'description' =>'Sector A',
        ]);
        \DB::table('sectors')->insert([

            'description' =>'Sector B',
        ]);
        \DB::table('sectors')->insert([

            'description' =>'Sector C',
        ]);
        \DB::table('sectors')->insert([

            'description' =>'Sector D',
        ]);
        \DB::table('sectors')->insert([

            'description' =>'Sector E',
        ]);
    }


}
