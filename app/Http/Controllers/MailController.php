<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\PbPg;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
class MailController extends Controller
{
    //
    public function sendMail( $pbpgId, $postId)
    {
    	$pbpg = PbPg::findOrFail($pbpgId);
    	$post = Post::findOrFail($postId);
    	// dd($pbpg->email);
    	Mail::to($pbpg->email)->send(new SendMail($pbpg,$post));

        
        // Mail::send('mail', array('link'=>$link,), function($message){
        //     $message->to('manhau.174@gmail.com', 'Thông báo')->subject('Thông báo');
        // });
        // Session::flash('flash_message', 'Send message successfully!');

        // return view('index');
    }
}
