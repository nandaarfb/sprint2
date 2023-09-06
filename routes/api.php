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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Province
Route::get('province', 'ProvinceController@index');
Route::get('province/{id}', 'ProvinceController@show');
Route::post('province', 'ProvinceController@store');
Route::put('province/{id}', 'ProvinceController@update');
Route::delete('province/{id}', 'ProvinceController@delete');

// City
Route::get('city', 'CityController@index');
Route::get('city/{id}', 'CityController@show');
Route::post('city', 'CityController@store');
Route::put('city/{id}', 'CityController@update');
Route::delete('city/{id}', 'CityController@delete');

// Soal Test
Route::get('search/province/{id}', 'ProvinceController@show');
Route::get('search/city/{id}', 'CityController@show');
