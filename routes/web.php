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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('accueil', function () {
    return view('accueil');
});

Route::resource('/users','App\Http\Controllers\UserController');

Route::resource('/appointments','App\Http\Controllers\AppointmentController');
/*
Route::get('appointments','App\Http\Controllers\AppointmentController@list_appointments');

Route::post('appointments','App\Http\Controllers\AppointmentController@store');

Route::get('appointments/{id}/edit','App\Http\Controllers\AppointmentController@edit');

Route::put('appointments/{id}','App\Http\Controllers\AppointmentController@update');

Route::delete('appointments/{id}','App\Http\Controllers\AppointmentController@destroy');

Route::get('/about', function () {
    return view('about');
});*/


