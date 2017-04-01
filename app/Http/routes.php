<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','StaticAcController@GetIndex');
Route::any('index','StaticAcController@GetAcList');
Route::get('ac','StaticAcController@GetAcList');
Route::get('ac-detail/{id}',function ($id){
    return \App\Http\Controllers\DynamicAcController::GetAcDetail($id);
});
