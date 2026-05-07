<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
protected $fillable = [
    'appointment_date',
    'appointment_time',
    'appointment_type',
    'status',
    'reason',
    'additional_notes',
    'patient_id',
    'doctor_id',
];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
