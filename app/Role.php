<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const MANAGER = 1;
    const PATIENT = 2;
    const DOCTOR = 3;
    const SECRETARY = 4;
    const ACCOUNTANT = 5;
    const DISPENSARY = 6;
}
