<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\City;
class PostController extends Controller
{
    //
    public function create(){
    	$cities = City::all();
    	
    	return view('post.create', ['cities' => $cities]);
    }
    public function store(Request $request) {
        $data = $request->all();
        Post::create($data);
        return redirect()->route('home');
        
        

    }
    public function detail($slug) {
        $post = Post::findPostBySlug($slug);
        // $post = Post::where('slug', $slug)->first();
        return view('post.detail', ['post' => $post ]);
    }
  //   public function test(){
  //   	$post = new Post([
	 //    'title' => 'đây là tiêu đề',
		// ]);

		// $post->save();
		// return $post->slug;
	 //    }
}
