<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    public function serial(){
        return $this->hasMany('App\Doctor');
     }
}
