<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [

        'description',
        'region_id',
        'cities_image',


    ];
    public function building(){
        return $this->hasMany(Building::class);
    }
    public function region(){
        return $this->belongsTo(Region::class);
    }
}
