<?php

use App\Http\Controllers\Api\ProvinceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RajaOngkirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum' )->get('/user', function(Request $request){
    return $request->user();
});

Route::get('/province', [ProvinceController::class, 'index']);




