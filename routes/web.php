<?php

use Illuminate\Support\Facades\Route;

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

Route::get('inicio', function () {
    return view('index');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('registro', function () {
    return view('Registro');
})->name('registrar');

Route::get('principal', function () {
    return view('dash/dashboard');
})->name('principal');
Route::get('mapa', function () {
    return view('dash/map-google');
})->name('mapa');
Route::get('/', function () {
    return view('principal');
})->name('map');
Route::get('tabla', "VariablesController@index")->name('tabla');
Route::get('cerrar', "UsuariosController@destroy")->name('cerrar');
Route::get('perfil',"UsuariosController@show")->name('perfil');

Route::put('actualizar', "UsuariosController@update")->name("actualizar");

Route::post("create","UsuariosController@create")->name("crear");
Route::post("entrar","UsuariosController@Login")->name("entrar");

Route::post("variablecrear","VariablesController@create")->name("variablecrear");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
