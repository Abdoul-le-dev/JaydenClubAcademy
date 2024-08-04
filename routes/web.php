<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\GetData;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\MatcheController;
use App\Http\Controllers\MatchResultatController;
use App\Http\Controllers\OfficielController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use App\Models\Equipe;
use App\Models\Recrutement;
use Illuminate\Support\Facades\Route;


//vitrine

//acceuil
Route::get('/', [VitrineController::class,'index'])->name('Home');

//contact
Route::get('/contact', [ContactController::class,'index'])->name('contact-view');
Route::post('/contact', [ContactController::class,'create'])->name('contact-create');

//blog
Route::get('/blog', [BlogController::class,'index'])->name('blog-view');
Route::get('/article', [PostController::class,'show'])->name('model-article');



//galerie
Route::get('/galerie', [DashboardController::class,'galeries'])->name('galerie-views');

//joueur
Route::get('/nos_joueurs', [JoueurController::class,'index'])->name('nosJoueurs-view');
Route::get('/joueur', [JoueurController::class,'joueur'])->name('joueur-view');

//paperase
Route::get('/apropos', [DashboardController::class,'aPropos'])->name('apropos-view');
Route::get('/mention_legale', [DashboardController::class,'mentionLegal'])->name('mentionLegale-view');
Route::get('/nosresultats', [DashboardController::class,'nosResultats'])->name('nosResultats-view');
Route::get('/politique_de_confidentialite', [DashboardController::class,'politiqueC'])->name('pc-view');

//recrutement
Route::get('/admission', [RecrutementController::class,'index'])->name('recrutement-view');
Route::post('/admission', [RecrutementController::class,'create'])->name('recrutement-create');
Route::get('/condition_admission', [RecrutementController::class,'caView'])->name('recrutementCondition-view');


//get data
Route::get('/get_image_gallerie', [GetData::class,'getImage']);
Route::get('/get_image_joueur', [GetData::class,'getJoueur']);

//membre de staff
Route::get('/staffs', [VitrineController::class,'staffs_view'])->name('staffs.view');
Route::get('/staffs/{id}', [OfficielController::class,'staff_view'])->name('staffs.single.view');

//matches liste
Route::get('/calendrier-resultats', [VitrineController::class,'matches_view'])->name('matches.view');


//admin
Route::prefix('/dashboard')->group(function () {

    Route::get('/blog', [DashboardController::class,'blog'])->name('admin-blog');
    Route::get('/blog/ajout', [DashboardController::class,'ajouter'])->name('admin-blog-add');
    Route::get('/blog/article/{id}', [DashboardController::class,'article'])->name('admin-blog-article');
    Route::post('/blog', [BlogController::class,'create'])->name('create');
    Route::get('/blog/update/{id}', [DashboardController::class,'update'])->name('admin-blog-update');
    Route::post('/blog/update/{id}', [PostController::class,'edit'])->name('admin-blog-updates');
    Route::get('/blog/delete/{id}', [DashboardController::class,'delete'])->name('admin-blog-delete');

    Route::get('/recrutement', [RecrutementController::class,'liste'])->name('recrutement-liste');
    Route::get('/contact', [ContactController::class,'liste'])->name('contact-liste');
    Route::get('/recrutement/see/{id}', [RecrutementController::class,'voir'])->name('recrutement-voir');


    //galerie
    Route::get('/galerie', [DashboardController::class,'galerie'])->name('galerie-view');
    Route::get('/galerie/add', [DashboardController::class,'addData'])->name('galerie-add');
    Route::get('/galerie/image', [DashboardController::class,'image'])->name('galerie-image');
    Route::post('/galerie/fichier', [GallerieController::class,'create'])->name('galerie-save');
    Route::get('/galerie/delete/{id}', [GallerieController::class,'delete'])->name('galerie-delete');
    Route::get('/galerie/video', [DashboardController::class,'video'])->name('galerie-video');



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

    //officiels
    Route::get('/officiels', [DashboardController::class,'officiels_view'])->name('dashboard.officiel.view');
    Route::get('/officiels/new', [DashboardController::class,'new_officiel'])->name('dashboard.officiel.new.view');
    Route::post('/officiels/new', [OfficielController::class,'create'])->name('dashboard.officiel.new.create');
    Route::get('/officiels/{id}/update', [DashboardController::class,'update_officiel'])->name('dashboard.officiel.update.view');
    Route::post('/officiels/{id}/update', [OfficielController::class,'update'])->name('dashboard.officiel.update');
    Route::delete('/officiels/{id}/delete', [OfficielController::class,'destroy'])->name('dashboard.officiel.delete');

    //officiels
    Route::get('/matches', [DashboardController::class,'matches_view'])->name('dashboard.match.view');
    Route::get('/matches/new', [DashboardController::class,'new_match'])->name('dashboard.match.new.view');
    Route::post('/matches/new', [MatcheController::class,'create'])->name('dashboard.match.new.create');
    Route::get('/matches/{id}/update', [DashboardController::class,'update_match'])->name('dashboard.match.update.view');
    Route::post('/matches/{id}/update', [MatcheController::class,'update'])->name('dashboard.match.update');
    Route::post('/matches/{id}/resultat', [MatchResultatController::class,'create'])->name('dashboard.match.result.edit');
    Route::delete('/matches/{id}/delete', [MatcheController::class,'destroy'])->name('dashboard.match.delete');
    // team
    Route::get('/equipe', [EquipeController::class, 'index'])->name('equipe.view');
    Route::get('/equipe/list', [EquipeController::class, 'list'])->name('equipe.list');
    Route::post('/equipe/create', [EquipeController::class, 'create'])->name('equipe.create');
    Route::put('/equipe/update/{id}', [EquipeController::class, 'update'])->name('equipe.update');
    Route::delete('/equipe/update/{id}', [EquipeController::class, 'delete'])->name('equipe.delete');

    // chat
    Route::get('/chat', [DashboardController::class, 'chat_view'])->name('dashboard.chat.view')->middleware('auth');

      // account
    Route::get('/profil', [DashboardController::class, 'profil_view'])->name('dashboard.profil.view')->middleware('auth');
    Route::post('/profil/password', [UserController::class, 'update_password'])->name('dashboard.profil.update.password')->middleware('auth');
    Route::post('/profil/update', [UserController::class, 'update_profil'])->name('dashboard.profil.update')->middleware('auth');
    Route::get('/accounts', [DashboardController::class, 'accounts_view'])->name('dashboard.accounts.view')->middleware('auth');
    Route::post('/accounts/new', [UserController::class, 'add_user'])->name('dashboard.accounts.create')->middleware('auth');
    Route::post('/accounts/{id}/update', [UserController::class, 'update_user'])->name('dashboard.accounts.update')->middleware('auth');
    Route::delete('/accounts/{id}/delete', [UserController::class, 'delete_user'])->name('dashboard.accounts.delete')->middleware('auth');


});


// chat

Route::get('/chat/messages/{conversationId}', [ChatController::class, 'getMessages'])->middleware('auth');
Route::post('/chat/send', [ChatController::class, 'sendMessage'])->middleware('auth');
Route::get('/chat/conversations/list', [ChatController::class, 'getUserConversations'])->middleware('auth');
Route::post('/chat/conversations', [ChatController::class, 'createConversation'])->middleware('auth');
Route::get('/chat/available-users/{userId}', [ChatController::class, 'getAvailableUsers'])->middleware('auth');
Route::get('/chat/search-users/{keyword}', [ChatController::class, 'searchUsers'])->middleware('auth');
Route::get('/chat/conversations/{conversationId}/details', [ChatController::class, 'getConversationDetails'])->middleware('auth');
Route::get('/chat/conversations/{conversationId}/messages', [ChatController::class, 'getConversationMessages'])->middleware('auth');
Route::get('/chat/conversations/messages/latest', [ChatController::class, 'checkForNewMessages'])->middleware('auth');
