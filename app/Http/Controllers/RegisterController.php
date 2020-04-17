<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Register;
use DB;

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
        $register=new Register;
        $register->Username=$request->input('Username');
        $register->Password=$request->input('Password');
        $register->Confirm_Password=$request->input('Confirm_Password');
        $register->Email=$request->input('Email');
         $register->Phone_Number=$request->input('Phone_Number');
          $register->Type=$request->input('Type');
        $register->save();
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
        return view('register.index')->with('register',$register);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $register= Register::find($id);
        return view('pages.edit')->with('register',$register);
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
       $this->validate($request,[
            'Username'=>'required',
            'Password'=>'required',
            'Confirm_Password'=>'required',
            'Email'=>'required',
            'Phone_Number'=>'required',
            'Type'=>'required'
        ]);
        $register = Register::find($id);
        $register->Username=$request->input('Username');
        $register->Password=$request->input('Password');
        $register->Confirm_Password=$request->input('Confirm_Password');
        $register->Email=$request->input('Email');
         $register->Phone_Number=$request->input('Phone_Number');
          $register->Type=$request->input('Type');
        $register->save();
        return redirect('/register')->with('success','User Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register=Register::find($id);
           if ($register != null) {
        $register->delete();
      return redirect('/register')->with('success', 'User Removed!!!');
    }

    return redirect('/register')->with(['message'=> 'Wrong ID!!']);
         
    }
}
