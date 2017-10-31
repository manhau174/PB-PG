<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
	
{
    //
    protected $table = "recruitments";
    public function posts(){
    	return $this->hasMany('App\Post','recruitment_id');
    }
}
