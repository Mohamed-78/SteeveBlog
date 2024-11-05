<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Frontend\WebSiteController;
use App\Http\Controllers\Backend\DashboardController;

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
    // });
});

