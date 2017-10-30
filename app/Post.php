<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','address','starting_day','ending_day','salary','slug','city_id','recruitment_id'];


    // public function pbpg(){
    // 	return $this->belongsToMany('App\PbPg');
    // }
}
