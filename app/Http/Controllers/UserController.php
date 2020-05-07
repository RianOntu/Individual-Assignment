<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{



      public function index()
    {
         $users= User::All();
        return view('home')->with('users',$users);
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
            
        ]);
        $user=new User;
        $user->name=$request->input('name');
        $user->password=$request->input('password');
      
        $user->email=$request->input('email');
        
        $user->save();
        return redirect('/admin')->with('success','User Created!!!');
    }
     public function show($id)
    {
           $user= User::find($id);
        return view('admin.index')->with('user',$user);
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
            'password'=>'required',
            'password_confirmation'=>'required',
            'email'=>'required'
            
        ]);
        $user = User::find($id);
        $user->name=$request->input('name');
        $user->password=$request->input('password');
 
        $user->email=$request->input('email');

        $user->save();
        return redirect('/admin')->with('success','User Updated!!!');
    }

}
<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
