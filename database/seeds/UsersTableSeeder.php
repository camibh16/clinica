<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Type_document;
use App\Gender;
use App\Occupation;
use App\Role;
// use App\Doctor;
// use App\Day;
// use App\Hour;
// use App\Medicament;
// use App\Medical_exam;
// use App\Medical_appointment;
// use App\State_Appointment;
// use App\Schedule;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

// Start truncate()
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Gender::truncate();
        Role::truncate();
        Type_document::truncate();
        Occupation::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        // Doctor::truncate();
        // Day::truncate();
        // Hour::truncate();
        // Medicament::truncate();
        // Medical_exam::truncate();
        // Medical_appointment::truncate();
        // State_Appointment::truncate();
        // Schedule::truncate();
// End truncate()

// Create gender
        $gender = new Gender;
        $gender->type = "masculino";
        $gender->save();
        $gender = new Gender;
        $gender->type = "femenino";
        $gender->save();
// End create gender

// Create role
        $role = new Role;
        $role->type = "Administrador";
        $role->save();
        $role = new Role;
        $role->type = "usuario";
        $role->save();
// End create role

// Create medical_exam
        // $medical_exam = new Medical_exam;
        // $medical_exam->type = "radio grafia";
        // $medical_exam->save();
        // $medical_exam = new Medical_exam;
        // $medical_exam->type = "foto";
        // $medical_exam->save();
// End create medical_exam

// Create Hour
        // $hour = new Hour;
        // $hour->hour = "8:00 am";
        // $hour->save();
        // $hour = new Hour;
        // $hour->hour = "8:30 am";
        // $hour->save();
        // $hour = new Hour;
        // $hour->hour = "9:00 am";
        // $hour->save();
        // $hour = new Hour;
        // $hour->hour = "9:30 am";
        // $hour->save();
        // $hour = new Hour;
        // $hour->hour = "10:00 am";
        // $hour->save();
        // $hour = new Hour;
        // $hour->hour = "10:30 am";
        // $hour->save();
        // $hour = new Hour;
        // $hour->hour = "11:00 am";
        // $hour->save();
        // $hour = new Hour;
        // $hour->hour = "11:30 am";
        // $hour->save();
// End create Hour

// Create day
        // $day = new Day;
        // $day->day = "lunes";
        // $day->day_number = 1;
        // $day->save();
        // $day = new Day;
        // $day->day = "martes";
        // $day->day_number = 2;
        // $day->save();
        // $day = new Day;
        // $day->day = "miercoles";
        // $day->day_number = 3;
        // $day->save();
        // $day = new Day;
        // $day->day = "jueves";
        // $day->day_number = 4;
        // $day->save();
        // $day = new Day;
        // $day->day = "viernes";
        // $day->day_number = 5;
        // $day->save();
        // $day = new Day;
        // $day->day = "sabado";
        // $day->day_number = 6;
        // $day->save();  
// End create day

// Create Medicament
        // $medicament = new Medicament;
        // $medicament->name = "acetaminofen";
        // $medicament->stock = 1000;
        // $medicament->save();
        // $medicament = new Medicament;
        // $medicament->name = "aspirina";
        // $medicament->stock = 100;
        // $medicament->save();
// End create Medicament

// Create schedule
        // $schedule = new Schedule;
        // $schedule->day_id = 1;
        // $schedule->start_hour = 1;
        // $schedule->end_hour = 2;
        // $schedule->save();
        // $schedule = new Schedule;
        // $schedule->day_id = 1;
        // $schedule->start_hour = 3;
        // $schedule->end_hour = 4;
        // $schedule->save();
// End create schedule

// Create document
        $type_document = new Type_document;
        $type_document->type = "cedula";
        $type_document->save();
        $type_document = new Type_document;
        $type_document->type = "tarjeta de identidad";
        $type_document->save();
// End create document

// Create occupation
        $occupation = new Occupation;
        $occupation->type = "estudiante";
        $occupation->description = "estudiante universitario";
        $occupation->save();
        $occupation = new Occupation;
        $occupation->type = "trabajador";
        $occupation->description = "trabajador";
        $occupation->save();
// End occupation

// Create doctor
        // $doctor = new Doctor;
        // $doctor->name = "doctor";
        // $doctor->lastname = "doc";
        // $doctor->email = "doctor@gmail.com";
        // $doctor->password = bcrypt("123123");
        // $doctor->cellphone = 3206877796;
        // $doctor->gender_id = 1;
        // $doctor->document_id = 1;
        // $doctor->document_number = 1111810310;
        // $doctor->save();
// End create doctor

// Create user
        $user = new User;
        $user->name = "Christian Camilo";
        $user->lastname = "Barrera";
        $user->email = "camibh16@gmail.com";
        $user->password = bcrypt("Pollito123");
        $user->cellphone = 3206877796;
        $user->occupation_id = 1;
        $user->role_id = Role::MANAGER;	
        $user->gender_id = 1;
        $user->type_document_id = 1;
        $user->document_number = 1111810311;
        $user->save();
// End create user

// Create state_appointment
        // $state_appointment = new State_appointment;
        // $state_appointment->state = "en espera";
        // $state_appointment->description = "En espera de asistencia";
        // $state_appointment->save();
        // $state_appointment = new State_appointment;
        // $state_appointment->state = "sala de espera";
        // $state_appointment->description = "en espera de aprobacion para seguir al consultorio";
        // $state_appointment->save();
// End create state_appointment

// Create Medical_appointment
        // $medical_appointment = new Medical_appointment;
        // $medical_appointment->user_id = 1;
        // $medical_appointment->doctor_id = 1;
        // $medical_appointment->day = "lunes";
        // $medical_appointment->start_hour = "8:00 am";
        // $medical_appointment->end_hour = "9:30";
        // $medical_appointment->state_appointment_id = 1;
        // $medical_appointment->save();
// End create Medical_appointment

// Create Doctor_Schedule
        // $doctor_schedule = new Doctor_schedule;
        // $doctor_schedule->doctor_id = 1;
        // $doctor_schedule->schedule_id = 1;
        // $doctor_schedule->save();


    }
}
