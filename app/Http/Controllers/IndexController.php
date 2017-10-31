<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PbPg;
use App\Recruitment;
use Auth;
class IndexController extends Controller
{
    //
    public function showAll(){

		
        $posts = Post::all();
        $pbs = PbPg::where('gender', 1)->get();
        $pgs = PbPg::where('gender', 0)->get();
        return view('index', ['posts' => $posts,
                              'pbs' => $pbs,
                              'pgs' => $pgs,
                               ]);
    }
    
    

}
