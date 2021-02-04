<?php

use App\Http\Controllers\ArticleController;
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

Route::resource('articles', ArticleController::class);

Route::get('/', function () {
    return view('main-page/welcome');
})->name('main');

Route::get('/biography', function () {
    $collection = [
        [
            "title" => "article 1",
            "image_url" =>"someurl.com"
        ],
        [
            "title" => "article 2"
        ],
        [
            "title" => "article 1",
            "image_url" =>"someurl.com"
        ],
        [
            "title" => "article 2"
        ],
        [
            "title" => "article 1",
            "image_url" =>"someurl.com"
        ],
        [
            "title" => "article 2"
        ],
        [
            "title" => "article 1",
            "image_url" =>"someurl.com"
        ],
        [
            "title" => "article 2"
        ]
    ];
    return view('main-page/test', ['events' => $collection]);
});
Route::get('/contact-1', function () {
    return view('main-page/contact-1');
});
Route::get('/operations', function () {
    return view('main-page/operations');
});
Route::get('/research', function () {
    return view('main-page/research');
});
Route::get('/videos', function () {
    return view('min-page/videos');
});
Route::get('/videos', function () {
    return view('main-page/videos');
});
Route::get('/events', function () {
    return view('main-page/events');
});

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});
Route::get('/docview', function () {
    return view('dashboard/docview');
});
Route::get('/dashboard-article', function () {
    return view('dashboard/dashboard-article');
});
Route::get('/articleedit-dashb', function () {
    return view('dashboard/articleedit-dashb');
});


Route::get('/login', function () {
    return view('dashboard/login');
});
Route::get('/home-edit-dashboard', function () {
    return view('dashboard/home-edit-dashboard');
});
// Test

Route::get('/article-data-dahboard', function () {
    return view('dashboard/article-data-dahboard');
});
Route::get('/oper-edit-dahboard', function () {
    return view('dashboard/oper-edit-dahboard');
});
Route::get('/dash-edit', function () {
    return view('dashboard/dash-edit');
});


Route::group(['prefix' => 'ar'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('main.ar');

    Route::get('/operations', function () {
        return view('operations');
    });
    Route::get('/research', function () {
        return view('research');
    });
    Route::get('/videos', function () {
        return view('videos');
    });
});


