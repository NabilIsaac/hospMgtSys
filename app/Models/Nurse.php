<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    public function patients()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
