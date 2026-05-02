<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class appointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Appointment::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $appointments = [

            [
                'appointment_date' => '2026-05-05',
                'appointment_time' => '10:00:00',
                'appointment_type' => 'checkup',
                'status' => 'confirmed',
                'reason' => 'Routine medical checkup',
                'additional_notes' => 'Patient in good condition',
                'patient_id' => 1,
                'doctor_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-06',
                'appointment_time' => '11:30:00',
                'appointment_type' => 'follow-up',
                'status' => 'pending',
                'reason' => 'Blood pressure follow-up',
                'additional_notes' => null,
                'patient_id' => 2,
                'doctor_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-07',
                'appointment_time' => '12:00:00',
                'appointment_type' => 'emergency',
                'status' => 'confirmed',
                'reason' => 'Severe headache and dizziness',
                'additional_notes' => 'Needs MRI if symptoms persist',
                'patient_id' => 3,
                'doctor_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-08',
                'appointment_time' => '09:00:00',
                'appointment_type' => 'checkup',
                'status' => 'cancelled',
                'reason' => 'General checkup',
                'additional_notes' => 'Patient cancelled due to travel',
                'patient_id' => 4,
                'doctor_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-09',
                'appointment_time' => '14:00:00',
                'appointment_type' => 'follow-up',
                'status' => 'confirmed',
                'reason' => 'Diabetes monitoring',
                'additional_notes' => 'Check HbA1c results',
                'patient_id' => 5,
                'doctor_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-10',
                'appointment_time' => '16:00:00',
                'appointment_type' => 'checkup',
                'status' => 'pending',
                'reason' => 'Heart checkup',
                'additional_notes' => null,
                'patient_id' => 6,
                'doctor_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-11',
                'appointment_time' => '10:30:00',
                'appointment_type' => 'emergency',
                'status' => 'confirmed',
                'reason' => 'Chest pain',
                'additional_notes' => 'ECG required immediately',
                'patient_id' => 7,
                'doctor_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-12',
                'appointment_time' => '13:00:00',
                'appointment_type' => 'follow-up',
                'status' => 'pending',
                'reason' => 'Asthma follow-up',
                'additional_notes' => 'Review inhaler usage',
                'patient_id' => 8,
                'doctor_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-13',
                'appointment_time' => '15:00:00',
                'appointment_type' => 'checkup',
                'status' => 'confirmed',
                'reason' => 'General health check',
                'additional_notes' => null,
                'patient_id' => 9,
                'doctor_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-14',
                'appointment_time' => '17:00:00',
                'appointment_type' => 'follow-up',
                'status' => 'confirmed',
                'reason' => 'Skin allergy follow-up',
                'additional_notes' => 'Check reaction to medication',
                'patient_id' => 10,
                'doctor_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'appointment_date' => '2026-05-15',
                'appointment_time' => '10:00:00',
                'appointment_type' => 'checkup',
                'status' => 'pending',
                'reason' => 'Routine check',
                'additional_notes' => null,
                'patient_id' => 11,
                'doctor_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-16',
                'appointment_time' => '11:00:00',
                'appointment_type' => 'emergency',
                'status' => 'confirmed',
                'reason' => 'High fever',
                'additional_notes' => 'Monitor temperature',
                'patient_id' => 12,
                'doctor_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-17',
                'appointment_time' => '12:30:00',
                'appointment_type' => 'follow-up',
                'status' => 'cancelled',
                'reason' => 'Diabetes follow-up',
                'additional_notes' => 'Patient cancelled',
                'patient_id' => 13,
                'doctor_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'appointment_date' => '2026-05-18',
                'appointment_time' => '14:30:00',
                'appointment_type' => 'checkup',
                'status' => 'confirmed',
                'reason' => 'Annual checkup',
                'additional_notes' => null,
                'patient_id' => 14,
                'doctor_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Appointment::insert($appointments);
    }
}
