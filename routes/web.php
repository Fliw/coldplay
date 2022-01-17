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

Route::get('/','App\Http\Controllers\pagesController@index');
Route::get('/album/{album}','App\Http\Controllers\pagesController@album');
Route::get('/event','App\Http\Controllers\pagesController@event');

//route for admin
Route::get('/admin','App\Http\Controllers\adminController@index');

//admin event related routes
Route::get('/admin/events','App\Http\Controllers\adminController@events');
Route::post('/admin/event/store','App\Http\Controllers\adminController@storeEvent');
Route::post('/admin/event/update/{event}','App\Http\Controllers\adminController@updateEvent');
Route::get('/admin/event/delete/{event}','App\Http\Controllers\adminController@deleteEvent');

Route::get('/admin/albums','App\Http\Controllers\adminController@albums');
Route::post('/admin/album/store','App\Http\Controllers\adminController@storeAlbum');
Route::post('/admin/album/update/{album}','App\Http\Controllers\adminController@updateAlbum');
Route::get('/admin/album/delete/{album}','App\Http\Controllers\adminController@deleteAlbum');

