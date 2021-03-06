<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function doctor_type()
    {
        return $this->belongsTo(\App\Models\DoctorType::class);
    }

    public function patients()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
