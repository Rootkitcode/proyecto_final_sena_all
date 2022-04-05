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

Route::get('/admin/tickets','App\Http\Controllers\TicketsController@index')->name('admin.ticket')->middleware('auth');
Route::post('/admin/crearTicket','App\Http\Controllers\TicketsController@crearTicket')->middleware('auth');
Route::get('/admin/editarTicket/{id}/edit','App\Http\Controllers\TicketsController@editTicket')->middleware('auth');
Route::put('/admin/modificarTicket/{id}/edit','App\Http\Controllers\TicketsController@edit')->middleware('auth');

Route::get('/admin/responderTicket/{token}','App\Http\Controllers\TicketsController@responderTicket')->middleware('auth');
Route::post('/admin/crearRespuestaTicket','App\Http\Controllers\TicketsController@crearRespuestaTicket')->middleware('auth');
Route::get('/admin/editarRespuestaTicket/{token}/edit','App\Http\Controllers\TicketsController@editRespuestaTicket')->middleware('auth');
Route::put('/admin/modificarRespuestaTicket/{id}/edit','App\Http\Controllers\TicketsController@editRespuesta')->middleware('auth');

