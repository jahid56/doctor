<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
		'name',
        'division_id',
        'district_id',
        'hospital','education','fee','phone',
    ];

    public function district()
    {

        return $this->belongsto('App\District');
    }
    public function division()
    {

        return $this->belongsto('App\Division');
    }
    public function user(){
        return $this->belongsTo('App\User');
     }

     public function serial(){
        return $this->hasMany('App\Serial');
     }
}
