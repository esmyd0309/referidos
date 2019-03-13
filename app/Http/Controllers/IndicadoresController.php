<?php

namespace App\Http\Controllers;

use App\Indicadores;
use Illuminate\Http\Request;
use DB;
class IndicadoresController extends Controller
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
        $now = new \DateTime();
        $date=$now->format('Y-m-d');

        /**
         * Gestiones del grupo de Ventas, Total de  llamadas diarias. 
         */
        $log_VENTAS = DB::connection('asterisk')->select
        ("
        SELECT USER,COUNT(phone_number) AS Llamadas 
        FROM vicidial_log 
        WHERE STATUS IN ('A','CALLBK','CMP','CMPT','DNC','EF','EFT','EQV','FLL','FZ','NAP','NCT','SALE','SALET')
        AND call_date > '$date'
        AND user_group IN ('VENTAS')
         group by USER
         ORDER BY USER DESC
        ");


        /**
         * Gestiones del grupo de Ventas, TOTAL DE LLAMADAS EFECTIVAS. 
         */
        $log_VENTAS_f = DB::connection('asterisk')->select
        ("
        SELECT USER,COUNT(phone_number) AS Llamadas 
        FROM vicidial_log 
        WHERE STATUS IN ('SALE','SALET','EF','EFT','FLL','FZ','NAP','CALLBK','CMP','CMPT','DNC')
        AND call_date > '$date'
        AND user_group IN ('VENTAS')
         group by USER
         ORDER BY USER DESC
        ");



        /**
         * Gestiones del grupo de Ventas Ventas. 
         */
        $log_VENTAS_v = DB::connection('asterisk')->select
        ("
        SELECT USER,COUNT(phone_number) AS Llamadas 
        FROM vicidial_log 
        WHERE STATUS IN ('SALE','SALET')
        AND call_date > '$date'
        AND user_group IN ('VENTAS')
         group by USER
         ORDER BY USER DESC
        ");


        //dd($log_VENTAS);
        return view('indicadores.index',compact('log_VENTAS','log_VENTAS_f','log_VENTAS_v'));
        
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
     * @param  \App\Indicadores  $indicadores
     * @return \Illuminate\Http\Response
     */
    public function show(Indicadores $indicadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicadores  $indicadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicadores $indicadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicadores  $indicadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicadores $indicadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicadores  $indicadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicadores $indicadores)
    {
        //
    }
}
