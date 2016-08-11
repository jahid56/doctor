<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dcategory extends Model
{
    protected $fillable = ['name'];

     public function district()
    {

        return $this->belongsto('App\District');
    }
}
