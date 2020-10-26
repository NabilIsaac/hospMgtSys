<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public function getCreatedByNameAttribute()
    {
        return User::where('id', $this->created_by)->pluck('name')->first();
    }

    public function doctor()
    {
        return $this->hasMany(\App\Models\DoctorPatient::class, 'doctor_id');
    }

    public function nurse()
    {
        return $this->hasMany(\App\Models\PatientNurse::class, 'nurse_id');
    }


    public function room()
    {
        return $this->belongsTo(\App\Models\Room::class);
    }
}
