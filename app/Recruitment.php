<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
	protected $fillable = [
        'name', 'address', 'about','mobile','email','rate','user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
