<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('buildings')->insert([
            'description' =>'Ajax',
            'cities_id' =>'1',
            'buildings_image' => 'ed1.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Cassiopeia',
            'cities_id' =>'1',
            'buildings_image' => 'ed2.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Hera',
            'cities_id' =>'1',
            'buildings_image' => 'ed3.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Perseus',
            'cities_id' =>'2',
            'buildings_image' => 'ed4.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Caliope',
            'cities_id' =>'2',
            'buildings_image' => 'ed5.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Gransax',
            'cities_id' =>'2',
            'buildings_image' => 'ed6.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Ethos',
            'cities_id' =>'3',
            'buildings_image' => 'ed7.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Pathos',
            'cities_id' =>'3',
            'buildings_image' => 'ed8.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Logos',
            'cities_id' =>'3',
            'buildings_image' => 'ed9.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Atlantic',
            'cities_id' =>'4',
            'buildings_image' => 'ed10.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Vantar',
            'cities_id' =>'4',
            'buildings_image' => 'ed11.jpg'
        ]);\DB::table('buildings')->insert([
            'description' =>'Eclipse',
            'cities_id' =>'4',
            'buildings_image' => 'ed12.jpg'
        ]);
    }
}
