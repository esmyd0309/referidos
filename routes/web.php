<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('home', 'HomeController@index')->name('home');

Route::get('welcome', 'TbCampanaPersonaTelefonoController@index')->name('welcome');

/** app para buscar contactos del predictivo donde los log estan en el 1.7 del sqlsvr */
Route::get('log', 'LogpredictivoController@index')->name('log');
/*** Buscar datos de pacificar en el 192.168.1.7 */
Route::get('/referidos/pacificar', 'PacificardatosController@index')->name('pacificar');
/*** Buscar datos de Deprati en el 192.168.1.7 */
Route::get('/referidos/deprati', 'DepratiController@index')->name('deprati');

Auth::routes();
/**
 * sistema de referidos
 */
Route::resource('/referidos', 'TbcampanapersonaController');

Route::get('/dp', 'TbcampanapersonaController@createdp')->name('referidos.createdp');
Route::get('/cl', 'TbcampanapersonaController@createcl')->name('referidos.createcl');
Route::post('/dp/store', 'TbcampanapersonaController@storedp')->name('referidos.storedp');
Route::post('/cl/store', 'TbcampanapersonaController@storecl')->name('referidos.storecl');
Route::get('pre', 'PredictivoController@index')->name('pre.index');



/** fin del sistema de referidos */

/**
 * Sistema de actualizacion de parientes
 */

Route::resource('actualizars', 'ActualizarsController');
Route::get('api.contact', 'ActualizarsController@apiContact')->name('api.contact');

Route::resource('users', 'UserController');
Route::get('/actualizars/proce', 'ActualizarsController@edit')->name('gestion');
Route::get('/actualizars/proce/{id}/{agente}', 'ActualizarsController@procesarcedula')->name('gestion.procesar');

/**
 * sistema de inclumplidos
 */
Route::resource('incumplidos', 'IncumplidosController');

/**
 * SISTEMA DE INDICADORES PREDICTIVO 192.168.1.75
 */

Route::resource('/indicador', 'IndicadoresController');

Route::resource('/usuarios', 'UserPredictivosController');

Route::resource('/grupos', 'GruposPredictivosController');
Route::post('/usuarios/proc', 'UserPredictivosController@index')->name('grupo.proc');
Route::get('/usuarios/proc', 'UserPredictivosController@index')->name('grupo');

/*
Route::get('/grupo', 'GruposPredictivosController@index')->name('grupo.index');
Route::post('/usuarios/gru', 'UserPredictivosController@index')->name('grupo.ac');*/

Route::resource('archives', 'ArchiveController');
Route::get('media/{id}','ArchiveController@ver')->name('media.ver');

/**procesos sistemas */
Route::resource('vicidial', 'VicidialListTMPController');
Route::post('/vicidial/storecobranza', 'VicidialListTMPController@storecobranza')->name('vicidial.storecobranza');
Route::post('/vicidial/pre', 'VicidialListTMPController@pre')->name('vicidial.pre');
Route::post('/vicidial/precobranza', 'VicidialListTMPController@precobranza')->name('vicidial.precobranza');
Route::get('log_lis', 'VicidialListTMPController@log_lis')->name('log_lis');
Route::get('ventas', 'VicidialListTMPController@ventas')->name('ventas');
Route::get('cobranza', 'VicidialListTMPController@cobranza')->name('cobranza');

