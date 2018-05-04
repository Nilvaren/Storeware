<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function details(){
    	return $this->hasMany('App\TransactionDetail','id','id');
    }

    public function staff(){
    	return $this->belongsTo('App\User','id','StaffID');
    }
}
