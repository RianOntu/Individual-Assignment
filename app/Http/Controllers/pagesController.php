<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {

      $title="Login Page";
        return view('pages.index');
    }
    public function register()
    {

      $title="Register Page";
        return view('pages.register');
    }

    public function about()
    {   
        $title="About Page";
        return view('pages.about',compact('title'));
    }
    public function services()
    {
        $data=array(
            'title'=>'Services',
            'services'=>['Web','CN','SEO']

        );
        return view('pages.services')->with($data);
    }
}
