<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitePagesController;
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

 Route::prefix('{lang}')->middleware('setlocale')->group(function() {
   Route::get('/', [HomeController::class, 'index']);
   Route::get('/biografija', [SitePagesController::class, 'index']);
  });
  