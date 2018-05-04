<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transactions(){
    	return $this->hasMany('App\Transaction','StaffID','id');
    }
}
