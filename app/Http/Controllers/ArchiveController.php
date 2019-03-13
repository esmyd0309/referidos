<?php

namespace App\Http\Controllers;

use App\Archive;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use DB;
class ArchiveController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('archives.index')
        ->with('archives', $archives);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = auth()->id();
        // $input = $request->all();
 
         //$archive = $this->archiveRepository->create($input);
 
         Flash::success('Archivo Subido correctamente..!');
 
        
       
          $archive = new Archive;
          $archive->user = $usuario;
          $archive->file_title = $request->file_title;
          $archive->file_name = $request->file_name;
          
          $archive->image_path = request()->file->getClientOriginalName();
         
          request()->file->storeAs('uploads', request()->file->getClientOriginalName());
         
          
 
          $archive->save();
         
          return redirect(route('archives.index'));
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

    public function ver($id)
    {
        
        $archive  = Archive::select('image_path')->where('id','=',$id)->get();
        foreach($archive as $archives){
       $archive=$archives->image_path;
        }
        return response()->download(storage_path("app/uploads/$archive"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        return view('archives.edit')->with('archive', $archive);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archive $archive)
    {
        //
    }
}
