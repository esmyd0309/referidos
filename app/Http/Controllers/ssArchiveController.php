<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchiveRequest;
use App\Http\Requests\UpdateArchiveRequest;
use App\Repositories\ArchiveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use App\Models\Archive;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use DB;
class ArchiveController extends Controller
{
    /** @var  ArchiveRepository */
    private $archiveRepository;

    public function __construct(ArchiveRepository $archiveRepo)
    {
        $this->archiveRepository = $archiveRepo;
    }

    /**
     * Display a listing of the Archive.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->archiveRepository->pushCriteria(new RequestCriteria($request));
        $archives = $this->archiveRepository->all();

        return view('archives.index')
            ->with('archives', $archives);
    }

    /**
     * Show the form for creating a new Archive.
     *
     * @return Response
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
     * Display the specified Archive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        return view('archives.show')->with('archive', $archive);

    
        
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
     * Show the form for editing the specified Archive.
     *
     * @param  int $id
     *
     * @return Response
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
     * Update the specified Archive in storage.
     *
     * @param  int              $id
     * @param UpdateArchiveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchiveRequest $request)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        $archive = $this->archiveRepository->update($request->all(), $id);

        Flash::success('Archive updated successfully.');

        return redirect(route('archives.index'));
    }

    /**
     * Remove the specified Archive from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archive = $this->archiveRepository->findWithoutFail($id);

        if (empty($archive)) {
            Flash::error('Archive not found');

            return redirect(route('archives.index'));
        }

        $this->archiveRepository->delete($id);

        Flash::success('Archive deleted successfully.');

        return redirect(route('archives.index'));
    }
}
