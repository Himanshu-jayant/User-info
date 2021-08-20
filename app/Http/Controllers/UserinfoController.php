<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uinfo;


class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Uinfo::paginate(10);
        return view("Layout")->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[


            'fname'=>'required|string|min:1|max:10',
            // 'lname'=>'required|string|min:1|max:10',
            'email' =>'required|email',
            'B_day'=>'required|string',
            'B_Month'=>'required|string',
            'B_Year'=>'required|string',
            'mobile'=>'required|digits:10|numeric',
            'designation'=>'required|string|min:1|max:35',
            'gender'=>'required',
            'hobbies'=>'required',
    
        ]);
        
    $uinfos = new Uinfo();
    $uinfos ->fname = $request->input('fname');
    $uinfos ->lname = $request->input('lname');
    $uinfos ->email = $request->input('email');
    $day = $request->input('B_day');
    $month = $request->input('B_Month');
    $year = $request->input('B_Year');
    $uinfos ->dob = $day.'/'.$month.'/'.$year;
    $uinfos ->mobile = $request->input('mobile');
    $uinfos ->designation = $request->input('designation');
    $uinfos ->gender = $request->input('gender');
    $uinfos ->hobbies = $request->input('hobbies');

    $uinfos->save();

     return redirect('/')->with('status','Your data is Added Successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= Uinfo::find($id);
        $user->delete();
        return  redirect('/')->with('status','Your data is Deleted Successfully');
    }
}
