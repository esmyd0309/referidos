<?php

namespace App\Http\Controllers;

use App\Tbcampanapersona;
use App\TbCampanaPersonaTelefono;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Pacificardatos;
class TbcampanapersonaController extends Controller
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
       

        return view('referidos.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        return view('referidos.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createdp()
    {
        return view('referidos.createdp');
    }

    public function createcl()
    {
        return view('referidos.createcl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        
        
        $tbcampana = new Tbcampanapersona;
        $tbcampana->IdCampaña           =   50; //ID DE LA CAMPAÑA
        $tbcampana->IdCampañaPersona    =   $request->CEDULA; 
        $tbcampana->idEstadoTabla       =   1;
        $tbcampana->idEstado            =   'A';
        $tbcampana->UltimaLlamada       =   '2018-12-11 19:59:46.737'; 
        $tbcampana->LlamadaRealizada    =   '0';
        $tbcampana->UsuRegistro         =   'APRUEBA';
        $tbcampana->FecRegistro         =   '2018-12-11 19:59:46.737'; 
        $tbcampana->UsuEdicion          =   'APRUEBA';
        $tbcampana->FecEdicion          =   '2018-12-11 19:59:46.737';
        $tbcampana->Venta               =   '0';
        $tbcampana->Campo1              =   $request->CEDULA; 
        $tbcampana->Campo2              =   $request->NOMBRE;
        $tbcampana->Campo3              =   $request->SOLCITUD;
        $tbcampana->Campo4              =   $request->DATO4;
        $tbcampana->Campo5              =   '';    
        $tbcampana->Campo6              =   '';
        $tbcampana->Campo7              =   '';
        $tbcampana->Campo8              =   $request->MARCA;
        $tbcampana->Campo9              =   $request->TIPO;
        $tbcampana->Campo10             =   $request->CUPO;
        $tbcampana->asignado            =   '0';
        $tbcampana->lote                =   '1';
        $tbcampana->Cerrada             =   '';

        $tbcampana->save();

        $tbcampanatel = new TbCampanaPersonaTelefono;
        
        $tbcampanatel->IdCampaña                =   $tbcampana->IdCampaña;
        $tbcampanatel->IdCampañaPersona         =   $request->CEDULA;
        $tbcampanatel->IdCampañaPersonaTelefono =   $request->TELEFONO;
        $tbcampanatel->IdTelefonoTabla          =   '8';
        $tbcampanatel->IdTelefono               =   '3';
        $tbcampanatel->IdRespuestaTabla         =   NULL; 
        $tbcampanatel->IdRespuesta              =   NULL;              
        $tbcampanatel->ProximaLlamadaDesde      =   NULL; 
        $tbcampanatel->ProximaLlamadaHasta      =   NULL; 
        $tbcampanatel->Contacto                 =   NULL; 
        $tbcampanatel->EsCorrecto               =   '1';
        $tbcampanatel->ResultadoLlamadaTabla    =   '0';
        $tbcampanatel->ResultadoLlamada         =   '';
        $tbcampanatel->IdTelefonoTablaLlamada   =   NULL;
        $tbcampanatel->IdTelefonoLlamada        =   NULL;
        $tbcampanatel->TelefonoLlamadaNuevo     =   NULL;
        $tbcampanatel->proximaLlamadaHoraDesde  =   NULL;
        $tbcampanatel->proximaLlamadaHoraHasta  =   NULL;
        $tbcampanatel->Comentario               =   NULL;
        $tbcampanatel->Extension                =   NULL;
        $tbcampanatel->lote                     =   '1';
        $tbcampanatel->UltimaLlamada            =   '';
        $tbcampanatel->UltimoAgente             =   '';
        $tbcampanatel->save();
      
        return redirect()->route('referidos.index')
        ->with('info', 'Referido Guardado Correctamente menol..!');
        

    }

    public function storecl(Request $request)
    {
        
      
        
        $tbcampana = new Tbcampanapersona;
        $tbcampana->IdCampaña           =   49; //ID DE LA CAMPAÑA
        $tbcampana->IdCampañaPersona    =   $request->CEDULA; 
        $tbcampana->idEstadoTabla       =   1;
        $tbcampana->idEstado            =   'A';
        $tbcampana->UltimaLlamada       =   '2018-12-11 19:59:46.737'; 
        $tbcampana->LlamadaRealizada    =   '0';
        $tbcampana->UsuRegistro         =   'APRUEBA';
        $tbcampana->FecRegistro         =   '2018-12-11 19:59:46.737'; 
        $tbcampana->UsuEdicion          =   'APRUEBA';
        $tbcampana->FecEdicion          =   '2018-12-11 19:59:46.737';
        $tbcampana->Venta               =   '0';
        $tbcampana->Campo1              =   $request->CEDULA; 
        $tbcampana->Campo2              =   $request->NOMBRE;
        $tbcampana->Campo3              =   $request->PLAN;
        $tbcampana->Campo4              =   $request->EMAIL;
        $tbcampana->Campo5              =   '';    
        $tbcampana->Campo6              =   $request->PROVINCIA;
        $tbcampana->Campo7              =   '';
        $tbcampana->Campo8              =   '';
        $tbcampana->Campo9              =   '';
        $tbcampana->Campo10             =   '';
        $tbcampana->asignado            =   '0';
        $tbcampana->lote                =   '1';
        $tbcampana->Cerrada             =   '';

        $tbcampana->save();
 
        $tbcampanatel = new TbCampanaPersonaTelefono;
        
        $tbcampanatel->IdCampaña                =   $tbcampana->IdCampaña;
        $tbcampanatel->IdCampañaPersona         =   $request->CEDULA;
        $tbcampanatel->IdCampañaPersonaTelefono =   $request->TELEFONO;
        $tbcampanatel->IdTelefonoTabla          =   '8';
        $tbcampanatel->IdTelefono               =   '3';
        $tbcampanatel->IdRespuestaTabla         =   NULL; 
        $tbcampanatel->IdRespuesta              =   NULL;              
        $tbcampanatel->ProximaLlamadaDesde      =   NULL; 
        $tbcampanatel->ProximaLlamadaHasta      =   NULL; 
        $tbcampanatel->Contacto                 =   NULL; 
        $tbcampanatel->EsCorrecto               =   '1';
        $tbcampanatel->ResultadoLlamadaTabla    =   '0';
        $tbcampanatel->ResultadoLlamada         =   '';
        $tbcampanatel->IdTelefonoTablaLlamada   =   NULL;
        $tbcampanatel->IdTelefonoLlamada        =   NULL;
        $tbcampanatel->TelefonoLlamadaNuevo     =   NULL;
        $tbcampanatel->proximaLlamadaHoraDesde  =   NULL;
        $tbcampanatel->proximaLlamadaHoraHasta  =   NULL;
        $tbcampanatel->Comentario               =   NULL;
        $tbcampanatel->Extension                =   NULL;
        $tbcampanatel->lote                     =   '1';
        $tbcampanatel->UltimaLlamada            =   '';
        $tbcampanatel->UltimoAgente             =   '';
        $tbcampanatel->save();
      
        return redirect()->route('referidos.index')
        ->with('info', 'Referido Guardado Correctamente' .' '. $tbcampanatel->IdCampañaPersona . ' '.$tbcampana->Campo2);
        

    }

    public function storedp(Request $request)
    {
        /*$this->validate(request(), [
            'IdCampañaPersona' => ['required', 'unique:IdCampañaPersona'],
            'IdCampañaPersonaTelefono' => ['required', 'unique:IdCampañaPersonaTelefono'],
            ]);*/
        
        
        $tbcampana = new Tbcampanapersona;
        $tbcampana->IdCampaña           =   33; //ID DE LA CAMPAÑA
        $tbcampana->IdCampañaPersona    =   $request->CEDULA; 
        $tbcampana->idEstadoTabla       =   1;
        $tbcampana->idEstado            =   'A';
        $tbcampana->UltimaLlamada       =   '2018-12-11 19:59:46.737'; 
        $tbcampana->LlamadaRealizada    =   '0';
        $tbcampana->UsuRegistro         =   'APRUEBA';
        $tbcampana->FecRegistro         =   '2018-12-11 19:59:46.737'; 
        $tbcampana->UsuEdicion          =   'APRUEBA';
        $tbcampana->FecEdicion          =   '2018-12-11 19:59:46.737';
        $tbcampana->Venta               =   '0';
        $tbcampana->Campo1              =   $request->CEDULA;
        $tbcampana->Campo2              =   $request->NOMBRE;
        $tbcampana->Campo3              =   '';
        $tbcampana->Campo4              =   '';
        $tbcampana->Campo5              =   $request->PROVINCIA;    
        $tbcampana->Campo6              =   '';
        $tbcampana->Campo7              =   '';
        $tbcampana->Campo8              =   $request->CALIFICACION;
        $tbcampana->Campo9              =   '';
        $tbcampana->Campo10             =   '';
        $tbcampana->asignado            =   '0';
        $tbcampana->lote                =   '1';
        $tbcampana->Cerrada             =   '';

        $tbcampana->save();
 
        $tbcampanatel = new TbCampanaPersonaTelefono;
        
        $tbcampanatel->IdCampaña                =   $tbcampana->IdCampaña;
        $tbcampanatel->IdCampañaPersona         =   $request->CEDULA;
        $tbcampanatel->IdCampañaPersonaTelefono =   $request->TELEFONO;
        $tbcampanatel->IdTelefonoTabla          =   '8';
        $tbcampanatel->IdTelefono               =   '3';
        $tbcampanatel->IdRespuestaTabla         =   NULL; 
        $tbcampanatel->IdRespuesta              =   NULL;              
        $tbcampanatel->ProximaLlamadaDesde      =   NULL; 
        $tbcampanatel->ProximaLlamadaHasta      =   NULL; 
        $tbcampanatel->Contacto                 =   NULL; 
        $tbcampanatel->EsCorrecto               =   '1';
        $tbcampanatel->ResultadoLlamadaTabla    =   '0';
        $tbcampanatel->ResultadoLlamada         =   '';
        $tbcampanatel->IdTelefonoTablaLlamada   =   NULL;
        $tbcampanatel->IdTelefonoLlamada        =   NULL;
        $tbcampanatel->TelefonoLlamadaNuevo     =   NULL;
        $tbcampanatel->proximaLlamadaHoraDesde  =   NULL;
        $tbcampanatel->proximaLlamadaHoraHasta  =   NULL;
        $tbcampanatel->Comentario               =   NULL;
        $tbcampanatel->Extension                =   NULL;
        $tbcampanatel->lote                     =   '1';
        $tbcampanatel->UltimaLlamada            =   '';
        $tbcampanatel->UltimoAgente             =   '';
        $tbcampanatel->save();
      
        return redirect()->route('referidos.index')
        ->with('info', 'Referido Guardado Correctamente'  .' '. $tbcampanatel->IdCampañaPersona . ' '.$tbcampana->Campo2 );
        

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Tbcampanapersona  $tbcampanapersona
     * @return \Illuminate\Http\Response
     */
    public function show(Tbcampanapersona $tbcampanapersona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbcampanapersona  $tbcampanapersona
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbcampanapersona $tbcampanapersona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbcampanapersona  $tbcampanapersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbcampanapersona $tbcampanapersona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbcampanapersona  $tbcampanapersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbcampanapersona $tbcampanapersona)
    {
        //
    }
}
