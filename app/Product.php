<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	
	protected $primaryKey = 'product_id';
    
    public function category(){

    	return $this->belongsTo('App\Category');

    }

    public function brand(){

    	return $this->belongsTo('App\Brand');
    }

    public function item(){

    	return $this->belongsTo('App\Item');
    }

    public function order_items(){

        return $this->belongsTo('App\Order_items');

    }
}
