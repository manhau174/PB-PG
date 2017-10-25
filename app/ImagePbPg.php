<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagePbPg extends Model
{
    protected $fillable = ['imagesPbPg','pbpg_id'];

    public function PbPgs(){
        return $this->hasMany('App\PbPg');
    }
}
