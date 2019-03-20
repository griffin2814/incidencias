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
    return view('welcome');
});

Auth::routes();




Route::get('cargos/edit/{cargo}', 'CargoController@edit');
Route::get('cargos/list', 'CargoController@list');
Route::get('cargos/create', function () {
    return view('cargos/create');
});

Route::get('cargos', 'CargoController@index');
Route::get('cargos/{cargo}', 'CargoController@show');
Route::post('cargos', 'CargoController@store');
Route::patch('cargos/{cargo}', 'CargoController@update');
Route::post('cargos/{cargo}', 'CargoController@create');
Route::delete('cargos/{cargo}', 'CargoController@destroy');

Route::get('entidades/edit/{entidad}', 'EntidadController@edit');
Route::get('entidades/list', 'EntidadController@list');
Route::get('entidades/create', function () {
    return view('entidades/create');
});

Route::get('entidades', 'EntidadController@index');
Route::get('entidades/{entidad}', 'EntidadController@show');
Route::post('entidades', 'EntidadController@store');
Route::patch('entidades/{entidad}', 'EntidadController@update');
Route::post('entidades/{entidad}', 'EntidadController@create');
Route::delete('entidades/{entidad}', 'EntidadController@destroy');

Route::get('modulos/edit/{modulo}', 'ModuloController@edit');
Route::get('modulos/list', 'ModuloController@list');
Route::get('modulos/create', function () {
    return view('modulos/create');
});

Route::get('modulos', 'ModuloController@index');
Route::get('modulos/{modulo}', 'ModuloController@show');
Route::post('modulos', 'ModuloController@store');
Route::patch('modulos/{modulo}', 'ModuloController@update');
Route::post('modulos/{modulo}', 'ModuloController@create');
Route::delete('modulos/{modulo}', 'ModuloController@destroy');

Route::get('sexos/edit/{sexo}', 'SexoController@edit');
Route::get('sexos/list', 'SexoController@list');
Route::get('sexos/create', function () {
    return view('sexos/create');
});

Route::get('sexos', 'SexoController@index');
Route::get('sexos/{sexo}', 'SexoController@show');
Route::post('sexos', 'SexoController@store');
Route::patch('sexos/{sexo}', 'SexoController@update');
Route::post('sexos/{sexo}', 'SexoController@create');
Route::delete('sexos/{sexo}', 'SexoController@destroy');

Route::get('tipoIncidencias/edit/{tipo}', 'TipoIncidenciaController@edit');
Route::get('tipoIncidencias/list', 'TipoIncidenciaController@list');
Route::get('tipoIncidencias/create', function () {
    return view('tipoIncidencias/create');
});

Route::get('tipoIncidencias', 'TipoIncidenciaController@index');
Route::get('tipoIncidencias/{tipo}', 'TipoIncidenciaController@show');
Route::post('tipoIncidencias', 'TipoIncidenciaController@store');
Route::patch('tipoIncidencias/{tipo}', 'TipoIncidenciaController@update');
Route::post('tipoIncidencias/{tipo}', 'TipoIncidenciaController@create');
Route::delete('tipoIncidencias/{tipo}', 'TipoIncidenciaController@destroy');
