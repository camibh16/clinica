<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Document;
use App\Gender;
use App\Occupation;
use App\Doctor;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::truncate();
        Document::truncate();
        Occupation::truncate();
        Doctor::truncate();
        User::truncate();

        $gender = new Gender;
        $gender->type = "masculino";
        $gender->save();
        $gender = new Gender;
        $gender->type = "femenino";
        $gender->save();

        $document = new Document;
        $document->type = "cedula";
        $document->save();

        $occupation = new Occupation;
        $occupation->type = "estudiante";
        $occupation->description = "estudiante universitario";
        $occupation->save();

        $occupation = new Occupation;
        $occupation->type = "trabajador";
        $occupation->description = "trabajador";
        $occupation->save();

        $doctor = new Doctor;
        $doctor->name = "doctor";
        $doctor->lastname = "doc";
        $doctor->mail = "doctor@gmail.com";
        $doctor->password = bcrypt("123123");
        $doctor->gender_id = 1;
        $doctor->document_id = 1;
        $doctor->save();

        $user = new User;
        $user->name = "Camilo";
        $user->lastname = "Barrera";
        $user->email = "camibh16@gmail.com";
        $user->password = bcrypt("Pollito123");
        $user->occupation_id = 1;	
        $user->gender_id = 1;
        $user->document_id = 1;
        $user->document_number = 1111810311;
        $user->birth= now();
        $user->doctor_id = 1;
        $user->save();

    }
}
