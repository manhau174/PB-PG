<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PbPg extends Model
{	
	protected $fillable = [
        'full_name', 'address', 'description','mobile','email','height' ,'weight','birthday','user_id','profile_picture','images','city_id','gender','location'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
