<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\OfficielController;
use App\Http\Controllers\VitrineController;
use Illuminate\Support\Facades\Route;


//vitrine
Route::get('/', [VitrineController::class,'index'])->name('Home');
Route::get('/contact', [ContactController::class,'index'])->name('contact-view');



// authentication
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login_view')->name('login.view');
    Route::get('/deconnexion', 'logout')->name('logout');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'register_view')->name('register.view');
    Route::post('/register', 'register')->name('register');
    Route::get('/confirmation-mail/{token}', 'confirmEmail')->name('confirm-email');
    //forget password
    Route::prefix('/password-forget')->group(function () {
        Route::get('/', 'password_reset_view')->name('password_reset.view');
        Route::post('/', 'password_reset')->name('password_reset');
        Route::get('/change-password/{token}', 'change_password_view')->name('change_password.view');
        Route::post('/change-password', 'change_password')->name('change_password');
    });
});



//dashbord
Route::prefix('/dashboard')->group(function () {
    Route::get('', [DashboardController::class,'index'])->name('dashboard.view');
    Route::get('/joueurs', [DashboardController::class,'joueurs_view'])->name('dashboard.joueurs');
    Route::get('/joueurs/new', [DashboardController::class,'new_joueur'])->name('dashboard.joueurs.new.view');
    Route::post('/joueurs/new', [JoueurController::class,'create'])->name('dashboard.joueurs.new.create');
    Route::get('/officiels', [DashboardController::class,'officiels_view'])->name('dashboard.officiel.view');
    Route::get('/officiels/new', [DashboardController::class,'new_officiel'])->name('dashboard.officiel.new.view');
    Route::post('/officiels/new', [OfficielController::class,'create'])->name('dashboard.officiel.new.create');
});

