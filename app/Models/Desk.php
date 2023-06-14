<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model

{
    protected $fillable = [

        'description',
        'level_id',
        'subsector_id',
        'sector_id',
        'building_id',
        'desk_image',


    ];
    public function clients_desks()
    {
        return $this->hasMany(Clients_desks::class);
    }

    public function building()
    {
        return $this->belongsTo(Building::class);

    }
   public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function subsector()
    {
        return $this->belongsTo(Subsector::class);
    }
}
