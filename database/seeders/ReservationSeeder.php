<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([
            'name' => 'Morning Schedule',
            'start_time' => '09:00:00',
            'end_time' => '13:00:00'
        ]);

        Reservation::create([
            'name' => 'Afternoon Schedule',
            'start_time' => '14:00:00',
            'end_time' => '18:00:00'
        ]);
    }
}
