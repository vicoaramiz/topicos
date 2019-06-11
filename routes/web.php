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

Route::resource('padres','PadreController');
Route::resource('alumnos','AlumnoController');
Route::get('alumnos/{alumno}/licencia','AlumnoController@licencia')->name('alumnos.licencia');
Route::get('alumnos/{alumno}/crear-licencia','AlumnoController@crear_licencia')->name('alumnos.crear-licencia');
