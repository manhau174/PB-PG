<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PbPg extends Model

    {
    	
    protected $fillable = ['full_name','birthday','address','email','mobile','description','gender','profile_picture','images','height','city_id','weight','user_id','location'];

    public function posts() {
        return $this->belongsToMany('App\Post', 'post_pbpg', 'pbpg_id', 'post_id')->withPivot('status','seen');
    }
    
    	
	
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function detail(){

    }
}
