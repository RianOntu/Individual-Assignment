<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $registers= Register::All();
        return view('register.index')->with('registers',$registers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('register.create');
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
            'Email'=>'required',
            'Phone_Number'=>'required',
            'Type'=>'required'
        ]);
        $Register=new Register;
        $Register->Username=$request->input('Username');
        $Register->Password=$request->input('Password');
        $Register->Confirm_Password=$request->input('Confirm_Password');
        $Register->Email=$request->input('Email');
         $Register->Phone_Number=$request->input('Phone_Number');
          $Register->Type=$request->input('Type');
        $Register->save();
        return redirect('/register')->with('success','User Created!!!');
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
        return view('register.show')->with('register',$register);
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
