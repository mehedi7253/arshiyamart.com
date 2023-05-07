<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use DB;

class Product extends Model
{
    public function attribute(){
      return $this->hasMany('App\ProductsAttribute','product_id');
    }
        public static function cartCount(){
    	
    		// User is not logged in. We will use Session
    		$session_id = Session::get('session_id');
    		$cartCount = DB::table('cart')->where('session_id',$session_id)->count('id');
    	
    	return $cartCount;
    }
}
