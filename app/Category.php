<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function item(){

    	return $this->hasMany('App\Item');


    }

    public function product(){

    	return $this->hasMany('App\Product');
    }
}
