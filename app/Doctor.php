<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
		'name',
        'division_id',
        'district_id',
    ];

    public function district()
    {

        return $this->belongsto('App\District');
    }
    public function division()
    {

        return $this->belongsto('App\Division');
    }
}
