<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GetData;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\OfficielController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\VitrineController;
use App\Models\Recrutement;
use Illuminate\Support\Facades\Route;


//vitrine

//acceuil
Route::get('/', [VitrineController::class,'index'])->name('Home');

//contact
Route::get('/contact', [ContactController::class,'index'])->name('contact-view');

//blog
Route::get('/blog', [BlogController::class,'index'])->name('blog-view');
Route::post('/blog', [BlogController::class,'create'])->name('create');
Route::get('/article', [PostController::class,'show'])->name('model-article');

//albums
Route::get('/albums', [Controller::class,'albums'])->name('album-view');

//galerie
Route::get('/galerie', [Controller::class,'galerie'])->name('galerie-view');

//joueur
Route::get('/nos_joueurs', [JoueurController::class,'index'])->name('nosJoueurs-view');
Route::get('/joueur', [JoueurController::class,'joueur'])->name('joueur-view');

//paperase
Route::get('/apropos', [Controller::class,'aPropos'])->name('apropos-view');
Route::get('/mention_legale', [Controller::class,'mentionLegal'])->name('mentionLegale-view');
Route::get('/nosresultats', [Controller::class,'nosResultats'])->name('nosResultats-view');
Route::get('/politique_de_confidentialite', [Controller::class,'politiqueC'])->name('pc-view');

//recrutement
Route::get('/recrutement', [RecrutementController::class,'index'])->name('recrutement-view');


//get data  
Route::get('/get_image_gallerie', [GetData::class,'getImage']);
Route::get('/get_image_joueur', [GetData::class,'getJoueur']);


//admin 
Route::prefix('/dashboard')->group(function () {

    Route::get('/blog', [DashboardController::class,'blog'])->name('admin-blog');
    Route::get('/blog/ajout', [DashboardController::class,'ajouter'])->name('admin-blog-add');
    Route::get('/blog/article/{id}', [DashboardController::class,'article'])->name('admin-blog-article');
    Route::get('/blog/update/{id}', [DashboardController::class,'update'])->name('admin-blog-update');
    Route::post('/blog/update/{id}', [DashboardController::class,'update'])->name('admin-blog-update');
    Route::get('/blog/delete/{id}', [DashboardController::class,'delete'])->name('admin-blog-delete');
  

});




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
    Route::get('/joueurs/{id}/update', [DashboardController::class,'update_joueur'])->name('dashboard.joueurs.update.view');
    Route::post('/joueurs/{id}/update', [JoueurController::class,'update'])->name('dashboard.joueurs.update');
    Route::delete('/joueurs/{id}/delete', [JoueurController::class,'destroy'])->name('dashboard.joueurs.delete');

    Route::get('/officiels', [DashboardController::class,'officiels_view'])->name('dashboard.officiel.view');
    Route::get('/officiels/new', [DashboardController::class,'new_officiel'])->name('dashboard.officiel.new.view');
    Route::post('/officiels/new', [OfficielController::class,'create'])->name('dashboard.officiel.new.create');
    Route::get('/officiels/{id}/update', [DashboardController::class,'update_officiel'])->name('dashboard.officiel.update.view');
    Route::post('/officiels/{id}/update', [OfficielController::class,'update'])->name('dashboard.officiel.update');
    Route::delete('/officiels/{id}/delete', [OfficielController::class,'destroy'])->name('dashboard.officiel.delete');
});

