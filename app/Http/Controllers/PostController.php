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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.posts' , [ 'posts' => $posts , 'content' => 'Post List']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recruitments = Recruitment::all();
        $cities = City::all();
        return view('posts.posts_create',['content' => 'Add new Post','cities' => $cities, 'recruitments' => $recruitments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Post::create($data);
        return json_encode(array(
            'error' => 0,
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $recruitment = $post->recruitment()->first();
        $city = $post->city->first();
         return view('posts.posts_detail',['city'=>$city,'recruitment' => $recruitment, 'post' => $post , 'content' => 'Post Information']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $recruitments = Recruitment::all();
        $cities = City::all();
        return view('posts.posts_edit',['cities'=>$cities, 'recruitments' => $recruitments , 'post' => $post , 'content' => 'Edit Post Information']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        Post::find($id)->update($data);
        return response()->json([
            'error' => 0
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id',$id)->delete(); 
        return response()->json([
            'error' => 0,
        ]);
    }

    public function create_post(){
        $cities = City::all();
        
        return view('post.create', ['cities' => $cities]);
    }

    public function RecruitmentStore(StorePostRequest $request) {

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

    public function detail($slug) {
        $post = Post::findPostBySlug($slug);
        $check = 0;
        if (!empty(Auth::user()->id)) {
            $user_id = Auth::user()->id;
            $pbpg = PbPg::where('user_id', $user_id)->first();
            if (!empty($pbpg)) {
               $pbpg_id = $pbpg->id;
                $post_id = $post->id;   
                $check = Post::check($post_id, $pbpg_id);
            }
            
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

    public function RecruitmentDestroy($id)
    {
        Post::find($id)->delete(); 
        return redirect()->route('recruitment.list');
    }
    
}

    

    

    

    

    

    

    

    

    
    // public function update($id) {
    //     $post = Post::find($id);
    //     $cities = City::all();
    //     return view('post.update', ['cities' => $cities, 'post' => $post]);
    // }
    // public function edit(StorePostRequest $request, $id) {
    //     $data = $request->all();
    //     $post = Post::find($id)->update($data);
    //     return redirect()->back();


    // }
    

    
    
   
  //   public function test(){
  //   	$post = new Post([
	 //    'title' => 'đây là tiêu đề',
		// ]);

		// $post->save();
		// return $post->slug;
	 //    }

