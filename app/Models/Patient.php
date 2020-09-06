<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class);
    }

    public function ward()
    {
        return $this->belongsTo(\App\Models\Ward::class);
    }

    public function room()
    {
        return $this->belongsTo(\App\Models\Room::class);
    }
}
