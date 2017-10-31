<?php

namespace App\Http\Controllers;

use App\User;
use App\Recruitment;
use App\PbPg;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        return view('users.users' , [ 'users' => $users , 'content' => 'User List']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.users_create', ['content' => 'Add new user']);
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
        $data['password'] = md5($data['password']);
        if($data['permission'] != 1){
            $user = User::create($data);
            if($data['permission'] == 2){
                $data['user_id'] = $user->id;
                Recruitment::create($data);
            }else{
                $data['user_id'] = $user->id;
                PbPg::create($data);
            }
        }else{
            User::create($data);
        }
        return response()->json([
            'error' => 0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user_detail = User::find($user->id);
        $permission = $user_detail->permission;
        $permission_msg = "";
        if($permission == 1) $permission_msg = "Admin";
        else if($permission == 2) $permission_msg = "Recruitment";
        else $permission_msg = "PB/PG";
        return view('users.users_detail',['user' => $user_detail , 'content' => 'User Information' ,  'permission' => $permission_msg] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user_result = User::find($user->id);
        return view('users.users_edit',['user' => $user_result , 'content' => 'Edit User Information']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $user_result = User::find($user->id);
        $data = $request->all();
        if($data['password'] == null) $data['password'] = $user_result->password;
        User::find($user->id)->update($data);
        // return redirect()->route('users.index');
        return response()->json([
            'error' => 0,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::where('id',$user->id)->delete(); 
        return response()->json([
            'error' => 0,
        ]);
    }
    
    public function getView($num){
        if($num == 2) {
            $view = view('users.recruitment');
        }else{
            $view = view('users.pbpg');
        }
        return $view;
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
