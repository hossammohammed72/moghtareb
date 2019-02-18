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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index')->name('home.post');
Route::get('/login', 'HomeController@login')->name('login');
//Route::middleware('auth')->group(function(){
Route::get('/room/add','RoomController@index')->name('room.add');
Route::get('/person/add','PersonController@index')->name('person.add');
Route::POST('/person/add','PersonController@index')->name('person.create');

//});
