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

Route::get('/admin/token','App\Http\Controllers\TokenController@index')->name('admin.token')->middleware('auth');
Route::post('/admin/agregarTokenProduccion','App\Http\Controllers\TokenController@agregarTokenProduccion')->name('admin.token')->middleware('auth');
Route::post('/admin/agregarTokenSandbox','App\Http\Controllers\TokenController@agregarTokenSandbox')->name('admin.token')->middleware('auth');
