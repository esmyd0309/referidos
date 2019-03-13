<?php

namespace App\Http\Controllers;

use App\Deprati;
use Illuminate\Http\Request;

class DepratiController extends Controller
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
    public function index()
    {
        return view('referidos.deprati');
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
     * @param  \App\Deprati  $deprati
     * @return \Illuminate\Http\Response
     */
    public function show(Deprati $deprati)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deprati  $deprati
     * @return \Illuminate\Http\Response
     */
    public function edit(Deprati $deprati)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deprati  $deprati
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deprati $deprati)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deprati  $deprati
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deprati $deprati)
    {
        //
    }
}
