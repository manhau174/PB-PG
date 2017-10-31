<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_pbpg extends Model
{
    //
    protected $fillable = ['post_id', 'pbpg_id', 'status','seen'];
    protected $table = "Post_pbpg";

    
}
