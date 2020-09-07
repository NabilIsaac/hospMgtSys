<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    public function doctor()
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'supervisor_id', 'id');
    }
}
