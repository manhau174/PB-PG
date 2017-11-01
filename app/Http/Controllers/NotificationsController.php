<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Recruitment;
use App\Post_pbpg;
use App\Post;
use App\PbPg;
use App\Mail\SendMail;
use Mail;
use Session;
class NotificationsController extends Controller
{
    //
    public function show(){
    	$user_id = Auth::user()->id;
    	$recruitment = Recruitment::where('user_id', $user_id)->first();

    	$posts = $recruitment->posts;
    	
    	return view('notifications', compact('posts'));
    }
    public function detail($post_id, $pbpg_id){
    	$post_pbpg = Post_pbpg::where('post_id',$post_id)->where('pbpg_id', $pbpg_id)->update(['seen' => '1']);
        $pbpg = PbPg::find($pbpg_id);
        $post = Post::find($post_id);
    	return view('notification_detail',['pbpg'=> $pbpg,
                                           'post' => $post]);
    }

    public function accept($post_id, $pbpg_id) {
        $post_pbpg = Post_pbpg::where('post_id',$post_id)->where('pbpg_id', $pbpg_id)->update(['status' => '1']);
        $pbpg = PbPg::findOrFail($pbpg_id);
        $post = Post::findOrFail($post_id);
        // dd($pbpg->email);
        Mail::to($pbpg->email)->send(new SendMail($pbpg,$post));

        
        return redirect()->back();
    }


}
