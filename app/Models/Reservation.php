<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [


        'name',
        'start_time',
        'end_time',




    ];

    public function clients_desks()
    {
        return $this->hasMany(Clients_desks::class);
    }
}
