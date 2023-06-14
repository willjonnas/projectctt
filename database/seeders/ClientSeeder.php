<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->insert([
            'description' =>'kate',
            'client_id' =>'1',
            'client_image' => 'testimonial-1.jpg'
        ]);\DB::table('clients')->insert([
            'description' =>'Jack',
            'client_id' =>'1',
            'client_image' => 'testimonial-2.jpg'
        ]);\DB::table('clients')->insert([
            'description' =>'john',
            'client_id' =>'1',
            'client_image' => 'testimonial-3.jpg'
        ]);\DB::table('clients')->insert([
            'description' =>'Jane',
            'client_id' =>'1',
            'client_image' => 'testimonial-4.jpg'
        ]);
    }
}
