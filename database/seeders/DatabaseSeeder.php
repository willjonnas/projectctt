<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        $this->call(ReservationSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(SectorSeeder::class);
        $this->call(SubsectorSeeder::class);
        $this->call(DeskSeeder::class);

    }
}
