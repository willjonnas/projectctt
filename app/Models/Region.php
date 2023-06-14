<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [

       'description',
        'region_image'


    ];



    public function city(){
       return $this->hasMany(City::class);
   }

}
