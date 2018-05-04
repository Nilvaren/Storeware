<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function transactions(){
    	return $this->belongsTo('App\TransactionDetail','ItemID','id');
    }
}
