<?php

use App\Http\Controllers\Front\LayoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LayoutController::class, 'home'])->name('home');
