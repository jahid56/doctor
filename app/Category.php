<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public function division()
    {

        return $this->belongsto('App\Division');
    }

     public function district()
    {

        return $this->belongsto('App\District');
    }
    public function hospital()
    {

        return $this->hasmany('App\Hospital');
    }
}
