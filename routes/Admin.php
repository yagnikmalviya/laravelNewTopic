<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\LayoutController;
use App\Http\Controllers\Admin\ExaleGenerateController;
use App\Http\Controllers\Front\GeneralController;


Route::get('login', [AuthController::class, 'Login'])->name('login');
Route::get('logout', [AuthController::class, 'Logout'])->name('logout');
Route::post('loginInsert', [AuthController::class, 'LoginInsert'])->name('loginInsert');

Route::group(['middleware' => 'Login'], function ()
{
    // xlsx import and export
    Route::get('/xlsxView',[ExaleGenerateController::class,'XlsxeView'])->name('xlsxTable');
    Route::post('/xlsxImport',[ExaleGenerateController::class,'XlsxImport'])->name('xlsxImport');
    Route::get('/xlsxExport',[ExaleGenerateController::class,'XlsxExport'])->name('xlsxExport');
    Route::get('/pdfExport',[ExaleGenerateController::class,'pdfExport'])->name('pdfExport');

    // Create Custom Blade Directive
    Route::get('/directive',[GeneralController::class,'Directive']);

    //Component
    Route::get('components', [GeneralController::class, 'Component'])->name('component');

    // Change Language
    Route::get('/language',[GeneralController::class,'language'])->name('language');
    Route::get('/languageChange',[GeneralController::class,'languageChange'])->name('languageChange');

    Route::get('facebook', [GeneralController::class, 'redirectToFacebook']);
    Route::get('facebook/callback', [GeneralController::class, 'handleFacebookCallback']);

    Route::get('google', [GeneralController::class, 'redirectToGoogle']);
    Route::get('google/callback', [GeneralController::class, 'handleGoogleCallback']);

    Route::get('/', [LayoutController::class, 'dashboard'])->name('dashboard');
});
