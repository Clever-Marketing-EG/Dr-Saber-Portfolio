<?php


use App\Http\Controllers\Dashboard\ContentController;
use App\Http\Controllers\Dashboard\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ArticleController as DashboardArticles;
use App\Http\Controllers\Dashboard\OperationController as DashboardOperations;
use App\Http\Controllers\Dashboard\MediaController as DashboardMedia;
use App\Http\Controllers\Dashboard\ResearchController as DashboardResearch;
use App\Http\Controllers\Dashboard\CertificateController;

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

    Route::resources([
        'articles' => DashboardArticles::class,
        'operations' => DashboardOperations::class,
        'researches' => DashboardResearch::class,
        'media' => DashboardMedia::class,
    ]);


    Route::resource('contents', ContentController::class)->only(['update', 'index']);
    Route::resource('images', ImageController::class)->only(['update', 'index']);
    Route::resource('certificates', CertificateController::class)->except(['edit']);


    Route::post('/articles/{article}/image', [ImageController::class, 'uploadArticleImage'])->name('articles.images.upload');
    Route::delete('/articles/images/{image}', [ImageController::class, 'deleteArticleImage'])->name('articles.images.destroy');


    Route::post('/operations/{operation}/image', [ImageController::class, 'uploadOperationImage'])->name('operations.images.upload');
    Route::delete('/operations/images/{image}', [ImageController::class, 'deleteOperationImage'])->name('operations.images.destroy');

});
