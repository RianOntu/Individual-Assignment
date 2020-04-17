<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use DB;

class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $registers= Register::orderBy('id','desc')->paginate(1);
        return view('registers.index')->with('registers',$registers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('registers.create');
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
            'Username'=>'required',
            'Password'=>'required',
            'Confirm_Password'=>'required',
            'Email'=>'required'
        ]);
           $register=new register;
        $register->Username=$request->input('Username');
        $register->Password=$request->input('Password');
        $register->Confirm_Password=$request->input('Confirm_Password');
        $register->Email=$request->input('Email');
        $register->save();
        return redirect('/registers')->with('success','User Created!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $register= Register::find($id);
        return view('registers.show')->with('register',$register);
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
        //
    }
}
