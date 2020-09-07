<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }

    public function drug()
    {
        return $this->belongsTo(\App\Models\Drug::class);
    }
}
