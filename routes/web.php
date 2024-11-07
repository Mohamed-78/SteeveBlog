<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\PodcastController;
use App\Http\Controllers\Frontend\WebSiteController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FormationController;
use App\Http\Controllers\Backend\ModerationCommentaireController;


Route::get('/',[WebSiteController::class, 'index'])->name('index');
Route::get('/apropos',[WebSiteController::class, 'about'])->name('about');
Route::get('/formations',[WebSiteController::class, 'formation'])->name('formation');
Route::get('/blog',[WebSiteController::class, 'blog'])->name('blog');
Route::get('/podcast',[WebSiteController::class, 'podcast'])->name('podcast');
Route::get('/contact',[WebSiteController::class, 'contact'])->name('contact');
Route::get('/blog/details',[WebSiteController::class, 'detailsBlog'])->name('details_blog');
Route::get('/services/developpement_de_produit_et_mvp',[WebSiteController::class, 'firstService'])->name('first_service');

Route::group([
    'prefix' => 'dashboard',
], function () {
    // Route::middleware('auth')->group(function () {
        Route::get('/espace-administration',[DashboardController::class, 'index'])->name('espace_administration');
        Route::resource('blog', BlogController::class);
        Route::resource('formation', FormationController::class);
        Route::resource('podcasts', PodcastController::class);
        Route::get('/moderation',[ModerationCommentaireController::class, 'moderation'])->name('moderation');
        Route::get('/reponse-commentaire',[ModerationCommentaireController::class, 'reponseCommentaire'])->name('reponse-commentaire');
    // });
});

