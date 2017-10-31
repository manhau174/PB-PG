<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\PbPg;
use App\Post_pbpg;
class Post_pbpgController extends Controller
{
    //
    public function store($post_id) {
    	$data['post_id'] = $post_id;
    	$user_id=Auth::user()->id;
    	// dd($user_id);
    	$pbpg = PbPg::where('user_id', $user_id)->first();

    	$data['pbpg_id'] = $pbpg->id;
    	// dd($data);
        $data['status'] = 0;
        $data['seen'] = 0;
    	Post_pbpg::create($data);
    	return redirect()->back();
    }

}
