<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogImageController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
  return redirect(app()->getLocale());
});
Route::get('/setLocaleRout/{lang}', function ($lang) {
  App::setlocale($lang);
  return redirect(app()->getLocale());
})->name('setLocaleRout');

Route::prefix('{lang}')->middleware('setlocale')->group(function () {
  Route::get('/', function () {
    return view("site.pages.homepage");
  });
  Route::view('/biografija', 'site.pages.biografija');
  Route::view('/dritanizam', 'site.pages.dritanizam');
  Route::resource('blogs', 'BlogController');
  Route::resource('videos', 'VideosController');
  Route::get('/', [VideosController::class,'indexOnHomePage']);
  Route::resource('blogimages', 'BlogImageController');
  Route::get('/blogs/destroy/{id}', [BlogController::class, 'destroy']);
  Route::post('/blogs/photo/delete/{id}', [BlogController::class, 'deletePhoto']);
  Route::get('/media', [BlogController::class, 'indexBlogsOnSite'])->name('indexBlogsOnSite');
  Route::get('/media/{id}', [BlogController::class, 'showBlogsOnSite'])->name('showBlogsOnSite');
  Auth::routes();
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
  });
});
