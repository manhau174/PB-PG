<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PbPg extends Model
{
    public function detail(){
    	
    }
    public function posts() {
        return $this->belongsToMany('App\Post', 'post_pbpg', 'pbpg_id', 'post_id')->withPivot('status','seen');
    }
}
