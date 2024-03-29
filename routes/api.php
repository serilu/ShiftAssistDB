<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemsController;

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

Route::post('/addAfdeling', [App\Http\Controllers\AfdelingenController::class, 'store']);
Route::get('/getAfdeling', [App\Http\Controllers\AfdelingenController::class, 'getAfdeling']);
Route::post('/getPakkettype', [App\Http\Controllers\AfdelingenController::class, 'getPakkettype']);

Route::get('/itemdetection/{s}', [ItemsController::class, 'getItems']);
Route::get('/itemdetection', [ItemsController::class, 'getTableLength']);
