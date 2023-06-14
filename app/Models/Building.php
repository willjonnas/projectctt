<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [

        'description',
        'city_id',
        'buildings_image',


    ];
    public function desk(){
        return $this->hasMany(Desk::class);
    }
    public function cities(){
        return $this->belongsTo(City::class);
    }
}
