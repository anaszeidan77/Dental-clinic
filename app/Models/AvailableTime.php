<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvailableTime extends Model
{
    protected $fillable = ['doctor_id', 'date', 'start_time', 'end_time','is_booked'];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id', 'doctor_id')
            ->whereColumn('appointment_datetime', 'available_times.date');
    }

}
