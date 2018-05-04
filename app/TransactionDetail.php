<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    //
    public function transaction(){
    	return $this->belongsTo('App\Transaction','id','id');
    }

    public function item(){
    	return $this->hasOne('App\Item','id','ItemID');
    }
}
