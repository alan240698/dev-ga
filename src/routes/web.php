<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
});

Route::view('/', 'user.pages.home')->name('home');

Route::view('/about', 'user.pages.about')->name('about');

Route::view('/contact', 'user.pages.contact')->name('contact');