<?php

use App\Http\Controllers\interventionImageController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\View\ExaleGenerateController;
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

Route::group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::post('/interventionImageInsert',[interventionImageController::class,'interventionImageAdd']);
    Route::get('/interventionImageView',[interventionImageController::class,'interventionImageView']);
    Route::get('/interventionImageDelete/{id}',[interventionImageController::class,'interventionImageDelete']);
    Route::post('/interventionImageUpdate/{id}',[interventionImageController::class,'interventionImageUpdate']);
});

// Job Queries Route
Route::get('/removeImageQuerJob',[interventionImageController::class,'removeImageQuerJob']);

// Resource Route
Route::resource('/resourceRoute',ResourceController::class);

// Xlsx data insert
Route::post('/xlsxInsert',[ExaleGenerateController::class,'xlsxInsert']);
