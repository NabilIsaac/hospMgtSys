<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public function getCreatedByNameAttribute()
    {
        return User::where('id', $this->created_by)->pluck('name')->first();
    }

    public function doctor_patient()
    {
        return $this->belongsTo(\App\Models\DoctorPatient::class);
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
