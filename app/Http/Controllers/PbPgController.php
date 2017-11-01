<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PbPg;
use App\albumPbPg;
use App\User;
use Auth;
// use App\Post;
class PbPgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = User::find(Auth::user()->id)->pbpg->id;

        $recruitment = PbPg::find($id);

        // dd($recruitment->posts);

        return view('recruitmentPbPg',['recruitment' => $recruitment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('updatePbPg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pbpg = PbPg::create([
            'full_name' => $request->full_name,
            'address' => $request->address,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'description' => $request->description,
            'gender' => $request->gender,
            'city_id' => $request->city_id,
            'profile_picture' => $request->profile_picture,
            'height' => $request->height,
            'weight' => $request->weight,
            'user_id' => $request->user_id,
        ]);

        foreach ($request->images as $image) {
            $filename = $image->store('images');
            albumPbPg::create([
                'pbpg_id' => $pbpg->id,
                'images' => $filename
            ]);
        }

        return redirect()->route('updatePbPg.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $pbpg = PbPg::find($id);
        // dd($id);
        return view('editPbPg',['pbpg' => $pbpg]);
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
        $pbpg = PbPg::find($id);
        $pbpg->update([
            'full_name' => $request->full_name,
            'address' => $request->address,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'description' => $request->description,
            'gender' => $request->gender,
            'city_id' => $request->city_id,
            'profile_picture' => $request->profile_picture,
            'height' => $request->height,
            'weight' => $request->weight,
            'user_id' => $request->user_id,
        ]);

        foreach ($request->images as $image) {
            $filename = $image->store('images/PbPg');
            albumPbPg::create([
                'pbpg_id' => $pbpg->id,
                'images' => $filename
            ]);
        }

        return redirect()->route('updatePbPg.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
