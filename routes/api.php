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
Route::post('/clients', 'ClientsController@create')->name('create_clients');
Route::post('/livros', 'LivrosController@create')->name('create_livros');
Route::get('/clients', 'ClientsController@list')->name('list_clients');
Route::get('/clients/{id}', 'ClientsController@show')->name('show_clients');
Route::put('/clients/{id}', 'ClientsController@update')->name('update_clients');
Route::delete('/clients/{id}', 'ClientsController@delete')->name('delete_clients');

Route::apiResource('emprestimos','EmprestimosController');
