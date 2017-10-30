<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PbPg extends Model
{
    protected $fillable = ['full_name','birthday','address','email','mobile','description','gender','profile_picture','images','height','city_id','weight','user_id'];

    public function posts(){
    	return $this->belongsToMany('App\Post','pb_pg_posts','pbpg_id','post_id');
    }
}
