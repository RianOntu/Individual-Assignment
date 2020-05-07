<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use DB;
use Session;


class HomeController extends Controller
{



      public function index(Request $req)
    {
  
               
        $users= User::All();
        return view('home')->with('users',$users);
    
 

   }
    

    
      public function create()
    {
         return view('admin.create');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function index()
    {
        return view('home');
    }*/
      public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
            'email'=>'required',
           'type'=>'required',
            
        ]);
        $user=new User;
        $user->name=$request->input('name');
        $user->password=$request->input('password');
      
        $user->email=$request->input('email');
         $user->type=$request->input('type');
        $user->save();
        if($user->type=='admin')
        {
              return redirect('/home')->with('success','User Created!!!');
        }
if($user->type=='teacher')
    {
              return redirect('/teacher')->with('success','You are now registered!!!');
        }
        if($user->type=='student')
    {
              return redirect('/student')->with('success','You are now registered!!!');
        }
      
    }
     public function show($id)
    {
           $user= User::find($id);
        return view('home')->with('user',$user);
    }
      public function edit($id)
    {
        $user= User::find($id);
        return view('pages.edit')->with('user',$user);
    }
       public function update(Request $request, $id)
    {
       $this->validate($request,[
            'name'=>'required',
         
            'email'=>'required',
            'type'=>'required',
            
        ]);
        $user = User::find($id);
        $user->name=$request->input('name');
      
 
        $user->email=$request->input('email');
        $user->type=$request->input('type');


        $user->save();
        return redirect('/home')->with('success','User Updated!!!');
    }
     public function destroy($id)
    {
        $user=User::find($id);
           if ($user != null) {
        $user->delete();
      return redirect('/home')->with('success', 'User Removed!!!');
    }

    return redirect('/home')->with(['message'=> 'Wrong ID!!']);
         
    }

}
