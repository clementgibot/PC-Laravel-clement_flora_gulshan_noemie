<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/test', function() {
  //return File::get('storage/articles/2iLWFBknyhBQfaXJdMefHnQDmXyYwg20X5SksAfJ.jpg');
  //});

require __DIR__.'/auth.php';

Route::resource('articles', ArticleController::class);
