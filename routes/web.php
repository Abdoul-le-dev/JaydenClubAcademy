<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VitrineController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VitrineController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);
