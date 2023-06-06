<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::prefix('/category')->group(function(){
    Route::get('product', [PageController::class, 'product'])->name('product');
});

Route::get('/news/{news}', [PageController::class, 'news'])->name('news');

Route::prefix('/program')->group(function(){
    Route::get('program', [PageController::class, 'program'])->name('program');
});
Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');

Route::resource('/contact-us', PageController::class, [
    'only' => ['index']
]);

