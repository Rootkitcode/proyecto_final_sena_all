<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PrincipalController;


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

Route::get('/admin/messages','App\Http\Controllers\MensajesController@index')->name('admin.messages')->middleware('auth');
Route::post('/admin/agregarMensaje','App\Http\Controllers\MensajesController@agregarMensaje' )->middleware('auth');
Route::get('/admin/editarMensaje/{id}/edit','App\Http\Controllers\MensajesController@editarMensaje')->middleware('auth');
Route::put('/admin/modificarMensaje/{id}/edit', 'App\Http\Controllers\MensajesController@edit')->middleware('auth');
Route::delete('/admin/eliminarMensaje/{id}','App\Http\Controllers\MensajesController@delete')->middleware('auth');
