<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    protected $table = 'state';
	
	 public function country(){ 
	    return $this->hasOne('App\Country','id','country_id');
	  }

}
