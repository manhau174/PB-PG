<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;


class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','permission', 'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public $timestamps = true;

    public static function getAll(){
        return DB::table('users')->get();

    }
    

    public static function getUserBy($email){

        
        return DB::table('users')->where('email',$email)->first();
    }

    public function pbpg(){
        return $this->hasOne('App\PbPg');
    }
}

