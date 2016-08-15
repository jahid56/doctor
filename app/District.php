<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable=[
        'name',
        'division_id',
    ];

    

    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function category()
    {
        return $this->hasmany('App\Category');
    }
    public function dcategory()
    {
        return $this->hasmany('App\Dcategories');
    }

    public function hospital()
    {
        return $this->hasmany('App\Hospital');
    }
    public function doctor()
    {
        return $this->hasmany('App\Doctor');
    }
}
