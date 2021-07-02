<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeSiteController;
use App\Http\Controllers\SitePagesController;
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
  Route::get('/', [HomeSiteController::class, 'index']);
  Route::view('/biografija', 'site.pages.biografija');
  Route::view('/media', 'site.pages.media');
  Route::view('/dritanizam', 'site.pages.dritanizam');
  Route::view('/dashboard', 'site.admin.dashboard');
  Route::get('/blog', [BlogController::class, 'index'])->name('blog');
  Auth::routes();
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
  });
});

