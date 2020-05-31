<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type','id');
    }
    public function product_brand(){
    	return $this->belongsTo('App\Brand','id_brand','id');
    }
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id');
    }
}
