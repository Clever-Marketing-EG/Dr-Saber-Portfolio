<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
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
//Route::get('/articles', [MainController::class, 'articles'])->name('main.articles');
//Route::get('/contact', [MainController::class, 'contact'])->name('contact');


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
Route::resource('publications', ResearchController::class);

/*
|--------------------------------------------------------------------------
| Events Routes
|--------------------------------------------------------------------------
*/
//==============================================================================


Route::get('/dashboar', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
