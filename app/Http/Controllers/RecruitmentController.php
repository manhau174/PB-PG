<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruitment;
use App\User;
class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $recruitments = Recruitment::all();
        return view('recruitments.recruitments' , [ 'recruitments' => $recruitments , 'content' => 'Recruitment List']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recruitments.recruitments_create' , [ 'content' => 'Add new Recruitment']);
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
        $data['permission'] = 2;
        $data['password'] = md5($data['password']);
        $user = User::create($data);
        $data['user_id'] = $user->id;
        Recruitment::create($data);
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
        $recruitment = Recruitment::find($id);
        $user = $recruitment->user()->first();
        return view('recruitments.recruitments_detail',['user' => $user, 'recruitment' => $recruitment , 'content' => 'Recruitment Information']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruitment = Recruitment::find($id);
        return view('recruitments.recruitments_edit',['recruitment' => $recruitment , 'content' => 'Edit Recruitment Information']);
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

        Recruitment::find($id)->update($data);
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
        Recruitment::where('id',$id)->delete(); 
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
