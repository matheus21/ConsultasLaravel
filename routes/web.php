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
    return view('app');
});


Route::group(['prefix' => 'pacientes'], function() {

    Route::get('/', 'PacientesController@index');
    Route::get('/add', 'PacientesController@add');
    Route::post('/post_add', 'PacientesController@post_add');
    Route::post('/post_edit', 'PacientesController@post_edit');
    Route::get('/{id}/edit', 'PacientesController@edit');
    Route::get('/{id}/delete', 'PacientesController@delete');
    Route::get('/{id}/post_delete', 'PacientesController@post_delete');

});

