<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [

        'description',
        'level_id',
        'subsector_id',
        'sector_id',
        'building_id',
        'desk_image',


    ];
}
