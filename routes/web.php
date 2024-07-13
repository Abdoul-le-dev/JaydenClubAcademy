<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\VitrineController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VitrineController::class,'index'])->name('Home');


Route::get('/contact', [ContactController::class,'index'])->name('contact-view');
