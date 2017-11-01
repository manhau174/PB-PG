<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PbPg;
use App\User;
use App\City;
class PbPgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pbpgs = PbPg::all();
        return view('pbpgs.pbpgs',['content' => 'Pb/Pg List' , 'pbpgs' => $pbpgs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('pbpgs.pbpgs_create',['content' => 'Create new Pb/Pg','cities' => $cities]);
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
        if($request->hasFile('profile_picture')){

            $path = $request->file('profile_picture')->store('profile_images');

            $data['profile_picture'] = $path;
        }
        $data['permission'] = 3;
        $data['password'] = md5($data['password']);
        $user = User::create($data);
        $data['user_id'] = $user->id;
        PbPg::create($data);
        return response()->json([
            'error' => 0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pbpg = PbPg::find($id);
        $user = $pbpg->user()->first();  
        $city = $pbpg->city()->first();
         return view('pbpgs.pbpgs_detail',['user' => $user, 'pbpg' => $pbpg , 'city' => $city , 'content' => 'PB/PG Information']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pbpg = PbPg::find($id);
        return view('pbpgs.pbpgs_edit',['pbpg' => $pbpg , 'content' => 'Edit PB/PG Information']);
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
        PbPg::find($id)->update($data);
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
        PbPg::where('id',$id)->delete(); 
        return response()->json([
            'error' => 0,
        ]);
    }

    public function checkEmail($email){
        $users = User::all();
        foreach ($users as $user) {
            if($email == $user->email){
                return json_encode(array(
                    'error' => 1,
                    'error_msg' => 'Email đã tồn tại',
                ));
            }
        }
        return json_encode(array(
            'error' => 0
        ));
    }
   
}
