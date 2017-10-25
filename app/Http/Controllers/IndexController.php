<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\PbPg;
class IndexController extends Controller
{
    
    public function showAll(){
        $jobs = Job::all();
        $pbs = PbPg::where('gender', 1)->get();
        $pgs = PbPg::where('gender', 0)->get();
        return view('index', ['jobs' => $jobs,
                              'pbs' => $pbs,
                              'pgs' => $pgs  ]);
    }
}
