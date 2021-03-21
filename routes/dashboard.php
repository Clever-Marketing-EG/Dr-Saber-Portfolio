<?php


use App\Http\Controllers\Dashboard\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ArticleController as DashboardArticles;
use App\Http\Controllers\SurgeriesDashboardController;


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
    Route::post('/articles/image/upload', [ImageController::class, 'upload'])->name('articles.images.upload');


    Route::get('surgeries', [SurgeriesDashboardController::class, 'index'])->name('surgeries.index');
    Route::get('surgeries/show/{operation}', [SurgeriesDashboardController::class, 'show'])->name('surgeries.show');
    Route::delete('surgeries/{operation}',[SurgeriesDashboardController::class, 'destroy'])->name('surgeries.delete');
    Route::get('surgeries/{operation}/edit', [SurgeriesDashboardController::class, 'edit'])->name('surgeries.edit');
    Route::patch('surgeries/edit/{operation}',[SurgeriesDashboardController::class, 'update'])->name('surgeries.update');

});
