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

Route::view('/', 'index')->name('index');

Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/soporte', 'soporte')->name('soporte');
Route::view('/tienda', 'tienda')->name('tienda');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contacto', 'contacto')->name('contacto');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
