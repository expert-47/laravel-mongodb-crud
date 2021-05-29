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



Route::get('add','AnimalController@create');
Route::post('add','AnimalController@store');
Route::get('animal','AnimalController@index');
Route::get('edit/{id}','AnimalController@edit');
Route::post('edit/{id}','AnimalController@update');
Route::delete('{id}','AnimalController@destroy');
