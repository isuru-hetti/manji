<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    //
    protected$fillable = [
        'user_id',
        'location',
        'date',
        'start_time',
        'end_time',
    ];

    // relationships with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
