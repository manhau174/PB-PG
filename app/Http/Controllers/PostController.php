<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\City;
use App\Recruitment;
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
}
