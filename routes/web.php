<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/book_detail/{id}', [HomeController::class, 'bookdetail'])->name('book_detail');
Route::get('/publisher', [PublisherController::class, 'publisher'])->name('publisher');
Route::get('/publisher_detail/{id}', [PublisherController::class, 'publisherdetail'])->name('publisherdetail');
Route::get('/category/{categories}', [CategoryController::class, 'bookcategories'])->name('categories');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
