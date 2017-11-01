<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    //
    use Sluggable;
    protected $table = "posts";
    protected $fillable = ['title','content','address','starting_day','ending_day','salary','slug','city_id', 'recruitment_id','status'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public static function findPostBySlug($slug) {
        return DB::table('posts')->where('slug', $slug)->first();
        
    }
    public static function check($post_id, $pbpg_id) {
        $count = Post_pbpg::where('post_id',$post_id)->where('pbpg_id',$pbpg_id)->count();
        if ($count == 0) {
            return false;
        }
        else{
            return true;
        }
    }

    public function pbpgs() {
        return $this->belongsToMany('App\PbPg', 'post_pbpg', 'post_id', 'pbpg_id')->withPivot('status','seen');
    }
    public function recruitment(){
        return $this->belongsTo('App\Recruitment');
    }

}
