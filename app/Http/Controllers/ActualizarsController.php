<?php

namespace App\Http\Controllers;
use App\Actualizars;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use DB;
use Redirect;
class ActualizarsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('actualizar.index');
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
        $registro = Actualizars::where('id',$id)->get();

        foreach ($registro as $registros){
        $agente = $registros->name;
        
        }
        
        $gestion = Actualizars::where('name', 'LIKE', "%$agente%")->paginate(5);
            
        //dd($plantilla);
        return view('actualizar.proce', compact('gestion','registro','id'));

        
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
        
    }


    public function procesarcedula($id,$agente)
    {
        $id_seleccionado = $id;///id del cliente seleccionado
        $id_agente = $agente;//id del cliente al cual se le tomara el dato almacenar, en el cliente seleccionado

        $registro = Actualizars::where('id',$id_seleccionado)->get();
        foreach ($registro as $registros){
        $ageteemail = $registros->email;
      
        }
          
        DB::table('actualizars')
        ->where('id', $id_agente)
        ->update(['email' => $ageteemail]);

        return Redirect::back()->with('info', 'Cedula Actualizada correctamente');
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
