<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Register;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $registers= Register::All();
        return view('home')->with('registers',$registers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.create');
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
            'name'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
            'email'=>'required',
            
        ]);
        $register=new Register;
        $register->Username=$request->input('name');
        $register->Password=$request->input('password');
        $register->Confirm_Password=$request->input('password_confirmation');
        $register->Email=$request->input('email');
        
        $register->save();
        return redirect('/admin')->with('success','User Created!!!');
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
        return view('admin.index')->with('register',$register);
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
            'name'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
            'email'=>'required'
            
        ]);
        $register = Register::find($id);
        $register->Username=$request->input('name');
        $register->Password=$request->input('password');
        $register->Confirm_Password=$request->input('password_confirmation');
        $register->Email=$request->input('email');

        $register->save();
        return redirect('/admin')->with('success','User Updated!!!');
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
      return redirect('/admin')->with('success', 'User Removed!!!');
    }

    return redirect('/admin')->with(['message'=> 'Wrong ID!!']);
         
    }
}
