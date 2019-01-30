<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/clients', 'ClientsController@create');
Route::post('/livros', 'LivrosController@create');
Route::post('/emprestimos', 'EmprestimosController@create');
Route::get('/clients', 'ClientsController@list');
Route::get('/clients/{id}', 'ClientsController@show');
Route::put('/clients/{id}', 'ClientsController@update');
Route::delete('/clients/{id}', 'ClientsController@delete');
