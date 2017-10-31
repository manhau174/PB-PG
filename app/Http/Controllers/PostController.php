<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\City;
use App\Recruitment;
use App\PbPg;
use App\Http\Requests\StorePostRequest;
use Auth;
class PostController extends Controller
{
    //
    public function create(){
    	$cities = City::all();
    	
    	return view('post.create', ['cities' => $cities]);
    }
    public function store(StorePostRequest $request) {
        $data = $request->all();
        $user_id = Auth::user()->id;
        $recruitment = Recruitment::where('user_id', $user_id)->first();
        $recruitment_id = $recruitment->id;
        $data["recruitment_id"] = $recruitment_id;
        $data["status"] = 0;
        // dd($data);
        Post::create($data);
        return redirect()->route('home');
        
    }
    public function update($id) {
        $post = Post::find($id);
        $cities = City::all();
        return view('post.update', ['cities' => $cities, 'post' => $post]);
    }
    public function edit(StorePostRequest $request, $id) {
        $data = $request->all();
        $post = Post::find($id)->update($data);
        return redirect()->back();

    }
    public function detail($slug) {
        $post = Post::findPostBySlug($slug);
        $user_id = Auth::user()->id;
        $pbpg = PbPg::where('user_id', $user_id)->first();
        if (!empty($pbpg)) {
           $pbpg_id = $pbpg->id;
            $post_id = $post->id;   
            $check = Post::check($post_id, $pbpg_id);
        }
        else{
            $check = 0;
        }
        
        // $post = Post::where('slug', $slug)->first();
        return view('post.detail', ['post' => $post, 'check' => $check]);
    }

    public function listOfRecruitment(){
        $user_id = Auth::user()->id;
        $recruitment = Recruitment::where('user_id', $user_id)->first();

        $posts = $recruitment->posts;
        return view('recruitment.list',compact('posts'));
    }
    
    public function destroy($id)
    {
        Post::find($id)->delete(); 
        return redirect()->route('recruitment.list');
    }
   
  //   public function test(){
  //   	$post = new Post([
	 //    'title' => 'đây là tiêu đề',
		// ]);

		// $post->save();
		// return $post->slug;
	 //    }
}
