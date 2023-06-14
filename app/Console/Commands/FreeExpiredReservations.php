<?php

namespace App\Console\Commands;

use App\Models\Clients_desks;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class FreeExpiredReservations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservations:free-expired';
    protected $description = 'Free reservations that have expired';

    /**
     * Execute the console command.
     *
     * @return int
     */
    //command for a possible implemntation of a sheduler
    public function handle()
    {
        $reservations = Clients_desks::where('created_at', '<', Carbon::now()->subMinutes(2))
            ->where('status', '=', 'reserved')
            ->get();

        foreach ($reservations as $reservation) {
            $reservation->status = 'free';
            $reservation->save();
        }

        $this->info(count($reservations) . ' expired reservations have been freed.');
    }
}
