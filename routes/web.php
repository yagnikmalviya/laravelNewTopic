<?php

use App\Http\Controllers\Front\ExaleGenerateController;
use App\Http\Controllers\Front\GeneralController;
use Illuminate\Support\Facades\Route;

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

Route::get('my-components', function () {
    return view('components.my_components');
});

// xlsx import and export
Route::get('/xlsxView',[ExaleGenerateController::class,'XlsxeView'])->name('xlsxTable');
Route::post('/xlsxImport',[ExaleGenerateController::class,'XlsxImport'])->name('xlsxImport');
Route::get('/xlsxExport',[ExaleGenerateController::class,'XlsxExport'])->name('xlsxExport');

// Create Custom Blade Directive
Route::get('/directive',[GeneralController::class,'Directive']);

// Change Language
Route::get('/langguage',[GeneralController::class,'Langguage']);
Route::get('/langguageChange',[GeneralController::class,'LangguageChange'])->name('langguageChange');



Route::get('facebook', [GeneralController::class, 'redirectToFacebook']);
Route::get('facebook/callback', [GeneralController::class, 'handleFacebookCallback']);


Route::get('google', [GeneralController::class, 'redirectToGoogle']);
Route::get('google/callback', [GeneralController::class, 'handleGoogleCallback']);
