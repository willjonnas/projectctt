<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('levels')->insert([
            'description' =>'1ºPiso',

        ]);
        \DB::table('levels')->insert([
            'description' =>'2ºPiso',

        ]);
        \DB::table('levels')->insert([
            'description' =>'3ºPiso',

        ]);
        \DB::table('levels')->insert([
            'description' =>'4ºPiso',

        ]);
        \DB::table('levels')->insert([
            'description' =>'5ºPiso',

        ]);
        \DB::table('levels')->insert([
            'description' =>'6ºPiso',

        ]);
    }
}
