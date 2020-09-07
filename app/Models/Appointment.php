<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }
}
