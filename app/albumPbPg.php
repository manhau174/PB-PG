<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class albumPbPg extends Model
{
    protected $fillable = ['pbpg_id','images'];


    public function pbpg()
    {
        return $this->belongsTo('App\PbPg');
    }
}
