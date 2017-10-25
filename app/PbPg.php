<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PbPg extends Model
{
    protected $fillable = ['full_name','birthday','address','email','mobile','description','gender','profile_picture','images','height','weight','user_id'];
}
