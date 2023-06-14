<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubsectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subsectors')->insert([

            'description' =>'subsector 1',
        ]);
        \DB::table('subsectors')->insert([

            'description' =>'subsector 2',
        ]);
        \DB::table('subsectors')->insert([

            'description' =>'subsector 3',
        ]);

    }
}
