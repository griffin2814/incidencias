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

alert()->success('Success Message', 'Optional Title');


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

Route::get('tipo_incidencias/edit/{tipo}', 'Tipo_incidenciaController@edit');
Route::get('tipo_incidencias/list', 'Tipo_incidenciaController@list');
Route::get('tipo_incidencias/create', function () {
    return view('tipo_incidencias/create');
});

Route::get('tipo_incidencias', 'Tipo_incidenciaController@index');
Route::get('tipo_incidencias/{tipo}', 'Tipo_incidenciaController@show');
Route::post('tipo_incidencias', 'Tipo_incidenciaController@store');
Route::patch('tipo_incidencias/{tipo}', 'Tipo_incidenciaController@update');
Route::post('tipo_incidencias/{tipo}', 'Tipo_incidenciaController@create');
Route::delete('tipo_incidencias/{tipo}', 'Tipo_incidenciaController@destroy');



Route::get('perfiles', 'PerfilController@index');
Route::get('perfiles/{}', 'PerfilController@show');
Route::get('perfiles/edit/{perfiles}', 'PerfilController@edit');
Route::post('perfiles', 'PerfilController@store');
Route::patch('perfiles/{perfiles}', 'PerfilController@update');
Route::post('perfiles/{perfiles}', 'PerfilController@create');
Route::delete('perfiles/{perfiles}', 'PerfilController@destroy');


Route::get('perfiles/list', 'PerfilController@list');
Route::get('perfiles/create', function () {
    return view('perfiles/create');
});


Route::get('incidencias', 'IncidenciaController@index');
Route::get('incidencias/{}', 'IncidenciaController@show');
Route::get('incidencias/edit/{incidencias}', 'IncidenciaController@edit');
Route::post('incidencias', 'IncidenciaController@store');
Route::patch('incidencias/{incidencias}', 'IncidenciaController@update');
Route::post('incidencias/{incidencias}', 'IncidenciaController@create');
Route::delete('incidencias/{incidencias}', 'IncidenciaController@destroy');


Route::get('incidencias/list', 'IncidenciaController@list');
Route::get('incidencias/create', function () {
    return view('incidencias/create');
});


Route::get('users', 'UserController@index');
Route::get('users/{}', 'UserController@show');
Route::get('users/edit/{users}', 'UserController@edit');
Route::post('users', 'UserController@store');
Route::patch('users/{users}', 'UserController@update');
Route::post('users/{users}', 'UserController@create');
Route::delete('users/{users}', 'UserController@destroy');


Route::get('users/list', 'UserController@list');
Route::get('users/create', function () {
    return view('users/create');
});


Route::get('roles', 'RolController@index');
Route::get('roles/{}', 'RolController@show');
Route::get('roles/edit/{roles}', 'RolController@edit');
Route::post('roles', 'RolController@store');
Route::patch('roles/{roles}', 'RolController@update');
Route::post('roles/{roles}', 'RolController@create');
Route::delete('roles/{roles}', 'RolController@destroy');


Route::get('roles/list', 'RolController@list');
Route::get('roles/create', function () {
    return view('roles/create');
});

