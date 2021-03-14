<?php

use App\Http\Controllers\ArticleController;
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
//Route::get('/articles', [MainController::class, 'articles'])->name('main.articles');
//Route::get('/biography', [MainController::class, 'biography'])->name('biography');
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
