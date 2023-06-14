<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('desks')->insert([
            'description' =>'Urza',
            'building_id' =>'1',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm1.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Urza-2',
            'building_id' =>'1',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '2',
            'desk_image' => 'm2.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Urza-3',
            'building_id' =>'1',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm5.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Anax-2',
            'building_id' =>'2',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '2',
            'desk_image' => 'm3.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Anax',
            'building_id' =>'2',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm4.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Anax-3',
            'building_id' =>'2',
            'level_id' => '2',
            'sector_id' => '2',
            'subsector_id'=> '2',
            'desk_image' => 'm4.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Helios',
            'building_id' =>'3',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm5.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Helios-2',
            'building_id' =>'3',
            'level_id' => '2',
            'sector_id' => '2',
            'subsector_id'=> '2',
            'desk_image' => 'm6.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Helios-3',
            'building_id' =>'3',
            'level_id' => '2',
            'sector_id' => '1',
            'subsector_id'=> '2',
            'desk_image' => 'm6.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Luna',
            'building_id' =>'4',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm9.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Luna-2',
            'building_id' =>'4',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm3.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Luna-3',
            'building_id' =>'4',
            'level_id' => '2',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm1.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Quirion',
            'building_id' =>'5',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm9.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Quirion-2',
            'building_id' =>'5',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm10.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Quirion-3',
            'building_id' =>'5',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm10.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Axle-1',
            'building_id' =>'6',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm2.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Axle-2',
            'building_id' =>'6',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm1.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Axle-3',
            'building_id' =>'6',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm10.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Aria',
            'building_id' =>'7',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm3.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Aria-2',
            'building_id' =>'7',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm9.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Aria-3',
            'building_id' =>'7',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm2.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Nara',
            'building_id' =>'8',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm2.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Nara-2',
            'building_id' =>'8',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm2.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Nara-3',
            'building_id' =>'8',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm2.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Oana',
            'building_id' =>'9',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm4.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Oana-2',
            'building_id' =>'9',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm1.jpg',
        ]);\DB::table('desks')->insert([
            'description' =>'Oana-3',
            'building_id' =>'9',
            'level_id' => '1',
            'sector_id' => '2',
            'subsector_id'=> '1',
            'desk_image' => 'm2.jpg',
        ]);

    }
}
