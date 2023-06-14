<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('regions')->insert([
            'description' =>'Norte',
            'region_image' => 'norte.jpg'
        ]);
        \DB::table('regions')->insert([
            'description' =>'Centro',
            'region_image' => 'centro.jpg'
        ]);
        \DB::table('regions')->insert([
            'description' =>'Sul',
            'region_image' => 'sul.jpg'
        ]);
    }
}
