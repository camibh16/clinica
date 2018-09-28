<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function Gender()
    {
        return $this->belongsTo('App\Gender');
    }

    public function Occupation()
    {
        return $this->belongsTo('App\Occupation');
    }

    public function Document()
    {
        return $this->belongsTo('App\Document');
    }
}
