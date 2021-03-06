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


Route::get('todos', 'TodoController@index');
Route::get('todos/{todo}', 'TodoController@show');
Route::get('NewTodo', 'TodoController@create');
Route::post('storeTodo', 'TodoController@store');

Route::get('todos/{todo}/edit', 'TodoController@edit');

Route::post('todos/{todo}/update', 'TodoController@update');
Route::get('todos/{todo}/delete', 'TodoController@destroy');
Route::get('todos/{todo}/complete', 'TodoController@completed');

