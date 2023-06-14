<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsector extends Model
{
    public function desk(){
        return $this->hasMany(Desk::class);
    }
}
