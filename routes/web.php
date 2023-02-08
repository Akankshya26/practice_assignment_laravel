<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CountryController;

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
//Country module
Route::get('view-country', [CountryController::class, 'viewCountry']);
Route::post('create-country', [CountryController::class, 'createCountry']);
Route::get('delete/{id}', [CountryController::class, 'destroy']);
Route::get('/country-edit/{id}', [CountryController::class, 'edit']);
Route::put('/country-update/{id}', [CountryController::class, 'update']);


//State Module
Route::get('view-state', [StateController::class, 'viewState']);
Route::post('create-state', [StateController::class, 'createState']);
Route::get('delete/{id}', [StateController::class, 'destroy']);
Route::get('/state-edit/{id}', [StateController::class, 'edit']);
Route::put('/state-update/{id}', [StateController::class, 'update']);

//City
Route::get('view-city', [CityController::class, 'viewCity']);
Route::post('create-city', [CityController::class, 'createCity']);
Route::get('delete/{id}', [CityController::class, 'destroy']);
Route::get('/city-edit/{id}', [CityController::class, 'edit']);
Route::put('/city-update/{id}', [CityController::class, 'update']);
