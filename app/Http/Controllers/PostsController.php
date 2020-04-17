<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
   /  * @return \Illuminate\Http\Response
     */
  /*  public function index()
    {
        $registers= registers::orderBy('title','desc')->paginate(1);
        return view('registers.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
   /  * @return \Illuminate\Http\Response
     */
   /* public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
   /  * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  /*  public function store(Request $request)
    {
        $this->validate($request,[
            'Username'=>'required',
            'Password'=>'required',
            'Confirm_Password'=>'required',
            'Email'=>'required'
        ]);
           $registers=new post;
        $registers->Username=$request->input('Username');
        $registers->Password=$request->input('Password');
        $registers->Confirm_Password=$request->input('Confirm_Password');
        $registers->Email=$request->input('Email');
        $registers->save();
        return redirect('/registers')->with('success','User Created!!');
    }

    /**
     * Display the specified resource.
     *
   //  * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
   /  * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
    / * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function update(Request $request, $id)
  /*  {
        //
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function destroy($id)
    {
        //
    }
}
*/