<?php

namespace App\Http\Controllers;

use App\UserPredictivos;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\PhonesPredictivos;
use App\GruposPredictivos;
class UserPredictivosController extends Controller
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

        //dd($request);

        if($request->user_group!=NULL){

       
        $grupo = new GruposPredictivos();
        
        $grupo->user_group=$request->user_group;

        $agente = $request->get('agente');
        $phone = $request->get('phone');
        $usuarios = UserPredictivos::where('user_group','=',$grupo->user_group)
        ->orderBy('user', 'ASC')
        ->agente($agente)
        ->phone($phone)
        ->get();
       
    }else{
        $grupo = new GruposPredictivos();
        
        $grupo->user_group=$request->user_group;

        $agente = $request->get('agente');
        $phone = $request->get('phone');
        $usuarios = UserPredictivos::orderBy('user', 'ASC')
        ->agente($agente)
        ->phone($phone)
        ->get();
    }
        
        return view('UsuariosPredictivo.ventas.index',compact('usuarios'));
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
     * @param  \App\UserPredictivos  $userPredictivos
     * @return \Illuminate\Http\Response
     */
    public function show(UserPredictivos $userPredictivos)
    {
        //dd($userPredictivos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserPredictivos  $userPredictivos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       
        $userPredictivos = UserPredictivos::find($id);
       
       $phone = PhonesPredictivos::all()->where('user_group','=',$userPredictivos->user_group);
        //dd($phone);
       return view('UsuariosPredictivo.ventas.edit',compact('userPredictivos','phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserPredictivos  $userPredictivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPredictivos $userPredictivos)
    {
        
     
        $user = PhonesPredictivos::where('login',$request->user)->update(['login' => 'LIBRE']);// libero la extension actual 
        $user2 = PhonesPredictivos::where('extension',$request->phone_login2)->update(['login' => $request->user]);//actualizar el usuario en la extension 
        $user3 = UserPredictivos::where('user',$request->user)->update(['phone_login' => $request->phone_login2]);//actualizar la extension del usuario
      
       
      
        return redirect()->back()->with('info', 'Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserPredictivos  $userPredictivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPredictivos $userPredictivos)
    {
        //
    }
}
