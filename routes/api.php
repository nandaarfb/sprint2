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

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    // Soal Test
    Route::get('search/provinces', 'ProvinceController@search');
    Route::get('search/cities', 'CityController@search');

    Route::post('/logout', 'API\AuthController@logout');
});
