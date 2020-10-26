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

    public function pharmacy()
    {
        return $this->belongsTo(\App\Models\Pharmacy::class, 'drug_id');
    }
}
