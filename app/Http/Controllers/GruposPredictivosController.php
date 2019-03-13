<?php

namespace App\Http\Controllers;

use App\GruposPredictivos;
use Illuminate\Http\Request;

class GruposPredictivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grupos = GruposPredictivos::all();
        //dd($grupos);
        return view('UsuariosPredictivo.grupo.index',compact('grupos'));
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
     * @param  \App\GruposPredictivos  $gruposPredictivos
     * @return \Illuminate\Http\Response
     */
    public function show(GruposPredictivos $gruposPredictivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GruposPredictivos  $gruposPredictivos
     * @return \Illuminate\Http\Response
     */
    public function edit(GruposPredictivos $gruposPredictivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GruposPredictivos  $gruposPredictivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GruposPredictivos $gruposPredictivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GruposPredictivos  $gruposPredictivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(GruposPredictivos $gruposPredictivos)
    {
        //
    }
}
