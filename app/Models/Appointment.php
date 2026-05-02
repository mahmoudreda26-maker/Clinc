<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'oppointment_date',
        'oppointment _time',
        'oppointments_type',
        'Status',
        'Reason',
        'Additional_Notes',
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
