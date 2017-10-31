<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'address', 'content','starting_day','ending_day','salary' ,'slug','city_id','recruitment_id','location','status',
    ];

    public function recruitment()
    {
        return $this->belongsTo('App\Recruitment');
    }
     public function city()
    {
        return $this->belongsTo('App\City');
    }
}
