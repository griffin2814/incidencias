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
Route::get('about', function () {
    $empresa = "miskilingo" ;
    return view('about', ['empresa' => $empresa]);
});

Route::get('principal', function () {
    return view('principal');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('informacion', function () {
    return view('informacion');
});

Route::get('referencia', function () {
    return view('referencia');
});
