<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Division extends Model
{
    protected $fillable = ['name'];
	
	public function districts()
    {

    	// $divisions = Division::all(); 
     //    $division_id = Input::get('id');
        return $this->hasMany('App\District','division_id');
    }
}
