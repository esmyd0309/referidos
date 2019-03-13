<?php

use Illuminate\Http\Request;
use App\User;
use App\Tbcampanapersona;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('users', function (){

    return datatables()
    ->eloquent(App\Actualizars::query())
    ->addColumn('btn', 'actualizar.actions')
    ->rawColumns(['btn'])
    ->toJson();
});

Route::get('log', function (){

    return datatables()
    ->eloquent(App\Logpredictivo::query())
    ->toJson();
});

Route::get('pacificar', function (){

    return datatables()
    ->eloquent(App\Pacificardatos::query())
    ->toJson();
});


Route::get('deprati', function (){

    return datatables()
    ->eloquent(App\Deprati::query())
    ->toJson();
});