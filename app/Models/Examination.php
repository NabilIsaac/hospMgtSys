<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{

    public function getCreatedByNameAttribute()
    {
        return User::where('id', $this->created_by)->pluck('name')->first();
    }

    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }

    public function nurse()
    {
        return $this->belongsTo(\App\Models\Nurse::class);
    }
}
