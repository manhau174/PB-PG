<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    //
    use Sluggable;
    protected $fillable = ['title','content','address','starting_day','ending_day','salary','slug','city_id', 'recruitment_id'];

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
}
