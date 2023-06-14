<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->insert([
            'description' =>'Porto',
            'region_id' =>'1',
            'cities_image' => 'porto.jpg'
        ]);\DB::table('cities')->insert([
            'description' =>'Braga',
            'region_id' =>'1',
            'cities_image' => 'Braga.jpg'
        ]);\DB::table('cities')->insert([
            'description' =>'Viana do Castelo',
            'region_id' =>'1',
            'cities_image' => 'Viana.jpg'
        ]);
        \DB::table('cities')->insert([
            'description' =>'Aveiro',
            'region_id' =>'2',
            'cities_image' => 'Aveiro.jpg'
        ]);
        \DB::table('cities')->insert([
            'description' =>'Coimbra',
            'region_id' =>'2',
            'cities_image' => 'Coimbra.jpg'
        ]);\DB::table('cities')->insert([
            'description' =>'Viseu',
            'region_id' =>'2',
            'cities_image' => 'viseu.jpg'
        ]);
        \DB::table('cities')->insert([
            'description' =>'Lisboa',
            'region_id' =>'3',
            'cities_image' => 'Lisboa.jpg'
        ]);\DB::table('cities')->insert([
            'description' =>'Faro',
            'region_id' =>'3',
            'cities_image' => 'faro.jpg'
        ]);\DB::table('cities')->insert([
            'description' =>'Évora',
            'region_id' =>'3',
            'cities_image' => 'evora.jpg'
        ]);
    }
}
