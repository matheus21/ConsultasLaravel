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

Route::get('/', 'PacientesController@index');


Route::group(['prefix' => 'pacientes'], function () {

    Route::get('/', 'PacientesController@index');
    Route::get('/add', 'PacientesController@add');
    Route::post('/post_add', 'PacientesController@post_add');
    Route::post('/post_edit', 'PacientesController@post_edit');
    Route::get('/{id}/edit', 'PacientesController@edit');
    Route::get('/{id}/delete', 'PacientesController@delete');
    Route::get('/{id}/post_delete', 'PacientesController@post_delete');

});


Route::group(['prefix' => 'consultas'], function() {

    Route::get('/{id}', 'ConsultasController@index');
    Route::get('/{id}/add', 'ConsultasController@add');
    Route::post('/post_add', 'ConsultasController@post_add');
    Route::post('/post_edit', 'ConsultasController@post_edit');
    Route::get('/{id}/edit', 'ConsultasController@edit');
    Route::get('/{id}/delete', 'ConsultasController@delete');
    Route::get('/{id}/post_delete', 'ConsultasController@post_delete');

});
