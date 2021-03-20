<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesDashboardController;
use App\Http\Controllers\SurgeriesDashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ResearchController;
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
Route::get('/test', [MainController::class, 'test'])->name('main.test');
Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

Route::get('/en', [LocalizationController::class, 'en'])->name('lang.en');
Route::get('/ar', [LocalizationController::class, 'ar'])->name('lang.ar');


/*
|--------------------------------------------------------------------------
| articles Routes
|--------------------------------------------------------------------------
*/
Route::resource('articles', ArticleController::class);

/*
|--------------------------------------------------------------------------
| Operations Routes
|--------------------------------------------------------------------------
*/
Route::resource('operations', OperationController::class);

/*
|--------------------------------------------------------------------------
| Publications Routes
|--------------------------------------------------------------------------
*/
Route::resource('research', ResearchController::class);

/*
|--------------------------------------------------------------------------
| Media Routes
|--------------------------------------------------------------------------
*/
Route::resource('media', MediaController::class)->except('show');

//==============================================================================


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth']
], function () {
    Route::get('articles', [ArticlesDashboardController::class, 'index'])->name('dashboard.index');
    Route::get('articles/show/{article}', [ArticlesDashboardController::class, 'show'])->name('dashboard.show');
    Route::delete('articles/{article}',[ArticlesDashboardController::class, 'destroy'])->name('dashboard.delete');
    Route::get('articles/{article}/edit', [ArticlesDashboardController::class, 'edit'])->name('dashboard.articles.edit');
    Route::patch('articles/edit/{article}',[ArticlesDashboardController::class, 'update'])->name('dashboard.update');
    Route::get('articles/add', [ArticlesDashboardController::class, 'add'])->name('dashboard.articles.add');
    Route::post('articles/store', [ArticlesDashboardController::class, 'store'])->name('dashboard.articles.store');



    Route::get('surgeries', [SurgeriesDashboardController::class, 'index'])->name('surgeries.index');
    Route::get('surgeries/show/{operation}', [SurgeriesDashboardController::class, 'show'])->name('surgeries.show');
    Route::delete('surgeries/{operation}',[SurgeriesDashboardController::class, 'destroy'])->name('surgeries.delete');
    Route::get('surgeries/{operation}/edit', [SurgeriesDashboardController::class, 'edit'])->name('surgeries.edit');
    Route::patch('surgeries/edit/{operation}',[SurgeriesDashboardController::class, 'update'])->name('surgeries.update');

});



require __DIR__.'/auth.php';
