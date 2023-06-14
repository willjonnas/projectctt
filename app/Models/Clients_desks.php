<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients_desks extends Model

{
    protected $fillable = [


        'users_id',
        'desks_id',
        'reservations_id',
        'reservation_date',




    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservations_id');
    }

    public function desk()
    {
        return $this->belongsTo(Desk::class, 'desks_id');
    }



}
