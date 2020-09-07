<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::namespace('Api')->name('api.')->group(function(){
Route::prefix('contactos')->group(function(){
    Route::get('/', 'ContactoController@index')->name('contactos');
    Route::get('/{id}', 'ContactoController@show')->name('show_contacto');
    Route::post('/', 'ContactoController@store')->name('store_contacto');
    Route::put('/{id}', 'ContactoController@update')->name('update_contacto');
    Route::delete('/{id}', 'ContactoController@delete')->name('delete_contacto');
});
});