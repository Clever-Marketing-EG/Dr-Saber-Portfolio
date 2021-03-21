<?php


use App\Http\Controllers\Dashboard\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ArticleController as DashboardArticles;
use App\Http\Controllers\Dashboard\OperationController as DashboardOperations;
use App\Http\Controllers\Dashboard\MediaController as DashboardMedia;


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth']
], function () {

    Route::resource('articles', DashboardArticles::class);
    Route::resource('operations', DashboardOperations::class);
    Route::resource('media', DashboardMedia::class);


    Route::post('/articles/image/upload', [ImageController::class, 'upload'])->name('articles.images.upload');


});
