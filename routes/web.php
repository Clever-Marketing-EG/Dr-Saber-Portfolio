<?php

use App\Http\Controllers\Home\ArticleController as HomeArticles;
use App\Http\Controllers\Home\MediaController as HomeMedia;
use App\Http\Controllers\Home\OperationController as HomeOperations;
use App\Http\Controllers\Home\ResearchController as HomeResearch;

use App\Http\Controllers\Dashboard\ArticleController as DashboardArticles;
use App\Http\Controllers\ArticlesDashboardController;
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
//Route::resource('operations', OperationController::class);

/*
|--------------------------------------------------------------------------
| Publications Routes
|--------------------------------------------------------------------------
*/
Route::get('/research', [HomeResearch::class, 'index'])->name('main.research.index');
Route::get('/research/{research}', [HomeResearch::class, 'show'])->name('main.research.show');
//Route::resource('research', ResearchController::class);

/*
|--------------------------------------------------------------------------
| Media Routes
|--------------------------------------------------------------------------
*/
Route::get('/media', [HomeMedia::class, 'index'])->name('main.media.index');
//Route::resource('media', MediaController::class)->except('show');

//==============================================================================


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth']
], function () {

    Route::resource('articles', DashboardArticles::class);

//    Route::get('articles', [ArticlesDashboardController::class, 'index'])->name('dashboard.index');
//    Route::get('articles/show/{article}', [ArticlesDashboardController::class, 'show'])->name('dashboard.show');
//    Route::delete('articles/{article}',[ArticlesDashboardController::class, 'destroy'])->name('dashboard.delete');
//    Route::get('articles/{article}/edit', [ArticlesDashboardController::class, 'edit'])->name('dashboard.articles.edit');
//    Route::patch('articles/edit/{article}',[ArticlesDashboardController::class, 'update'])->name('dashboard.update');
//    Route::get('articles/add', [ArticlesDashboardController::class, 'add'])->name('dashboard.articles.add');
//    Route::post('articles/store', [ArticlesDashboardController::class, 'store'])->name('dashboard.articles.store');
//
//
//
    Route::get('surgeries', [SurgeriesDashboardController::class, 'index'])->name('surgeries.index');
    Route::get('surgeries/show/{operation}', [SurgeriesDashboardController::class, 'show'])->name('surgeries.show');
    Route::delete('surgeries/{operation}',[SurgeriesDashboardController::class, 'destroy'])->name('surgeries.delete');
    Route::get('surgeries/{operation}/edit', [SurgeriesDashboardController::class, 'edit'])->name('surgeries.edit');
    Route::patch('surgeries/edit/{operation}',[SurgeriesDashboardController::class, 'update'])->name('surgeries.update');

});



require __DIR__.'/auth.php';
