<?php

use App\Http\Controllers\Home\ArticleController as HomeArticles;
use App\Http\Controllers\Home\MediaController as HomeMedia;
use App\Http\Controllers\Home\OperationController as HomeOperations;
use App\Http\Controllers\Home\ResearchController as HomeResearch;

use App\Http\Controllers\Dashboard\ArticleController as DashboardArticles;
use App\Http\Controllers\SurgeriesDashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MainController;
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


/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [MainController::class, 'main'])->name('main.home');
Route::get('/biography', [MainController::class, 'biography'])->name('main.biography');
Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

Route::get('/en', [LocalizationController::class, 'en'])->name('lang.en');
Route::get('/ar', [LocalizationController::class, 'ar'])->name('lang.ar');


/*
|--------------------------------------------------------------------------
| articles Routes
|--------------------------------------------------------------------------
*/
Route::get('/articles', [HomeArticles::class, 'index'])->name('main.articles.index');
Route::get('/articles/{article}', [HomeArticles::class, 'show'])->name('main.article.show');


/*
|--------------------------------------------------------------------------
| Operations Routes
|--------------------------------------------------------------------------
*/
Route::get('/operations', [HomeOperations::class, 'index'])->name('main.operations.index');
Route::get('/operations/{operation}', [HomeOperations::class, 'show'])->name('main.operations.show');

/*
|--------------------------------------------------------------------------
| Publications Routes
|--------------------------------------------------------------------------
*/
Route::get('/research', [HomeResearch::class, 'index'])->name('main.research.index');
Route::get('/research/{research}', [HomeResearch::class, 'show'])->name('main.research.show');

/*
|--------------------------------------------------------------------------
| Media Routes
|--------------------------------------------------------------------------
*/
Route::get('/media', [HomeMedia::class, 'index'])->name('main.media.index');

//==============================================================================



require __DIR__.'/dashboard.php';
require __DIR__.'/auth.php';
