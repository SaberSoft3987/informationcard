<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
     protected $guarded = []; 

     public function wilaya()
    {
        return $this->belongsTo(wilaya::class,'id_wilaya','id_wilaya');
    }

    public function candidates()
    {
        return $this->hasMany(candidate::class,'id_commune','id_commune');
    }
}

