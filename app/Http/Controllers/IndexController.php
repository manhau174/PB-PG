<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PbPg;
class IndexController extends Controller
{
    //
    public function showAll(){
        $posts = Post::all();
        
        $pbs = PbPg::where('gender', 1)->get();
        $pgs = PbPg::where('gender', 0)->get();
        return view('index', ['posts' => $posts,
                              'pbs' => $pbs,
                              'pgs' => $pgs  ]);
    }
    // strip tags to avoid breaking any html
    public function Cut($string) {
    	$string = strip_tags($string);

		if (strlen($string) > 500) {

		    // truncate string
		    $stringCut = substr($string, 0, 500);

		    // make sure it ends in a word so assassinate doesn't become ass...
		    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="/this/story">Read More</a>'; 
		}
		echo $string;
		}

}
