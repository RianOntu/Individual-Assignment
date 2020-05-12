<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Notes;
use Response;
use DB;
class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

              $notes= Notes::All();
        return view('pages.notes')->with('notes',$notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createnotes');
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
            'file' => 'required|file|max:2048',
        ]);
           // Handle File Upload
        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/file', $fileNameToStore);
        } else {
            $fileNameToStore = 'nofile.jpg';
        }
        $note=new Notes;
             $note->file = $fileNameToStore;
                     $note->save();

        return redirect('/notes')->with('success', 'File Posted!!!');
    }
    public function download(Request $request)

    {
                    
                    $filename = ''  ;

$path = storage_path($filename);

 

return Response::make(file_get_contents($path), 200, [

    'Content-Type'
=> 'application/pdf',

   
'Content-Disposition' => 'inline; filename="'.$filename.'"'

]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $note=Notes::find($id);
        $path = 'public/file/'.$note->file;
return Storage::download($path,$note->file);
//dd($content);
       // $note=Notes::find($id);
       // return Storage::download($note->path,$note->id);
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
