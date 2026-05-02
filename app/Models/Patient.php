<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
     protected $fillable = [
         'name',
         'phone',
         'email',
         'date_of_birth',
         'gender',
         'blood_group',
         'emergency_contact',
         'address',
         'medical_history',
         'status',
     ];

    public function appointments()
{
    return $this->hasMany(Appointment::class);
}
}
