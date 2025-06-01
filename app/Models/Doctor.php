<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
     protected $fillable = [
        'doctor_id',
        'specialization',
        'description',
    ];

    // relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
