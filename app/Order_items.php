<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    public function order(){

    	return $this->belongsTo('App\Order');

    }

    public function product(){

    	return $this->hasMany('App\Product');



    }
}
