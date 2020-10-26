<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientNurse extends Model
{
    protected $fillable = [
        'patient_id',
        'nurse_id',
    ];

    public function nurse()
    {
        return $this->belongsTo(Nurse::class, 'nurse_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
