<?php

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

Auth::routes();

Route::get('post/{id}', [App\Http\Controllers\FeedbackController::class, 'find_by_id'])->middleware('auth');
Route::resource('comment', App\Http\Controllers\CommentsController::class)->middleware('auth');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('home', App\Http\Controllers\FeedbackController::class)->middleware('auth');
Route::resource('/', App\Http\Controllers\FeedbackController::class)->middleware('auth');
// Route::resource('post/:id', App\Http\Controllers\FeedbackController::class)->middleware('auth');
Route::resource('feedback', App\Http\Controllers\FeedbackController::class)->middleware('auth');
Route::post('store', [App\Http\Controllers\FeedbackController::class,'store'])->middleware('auth');
Route::get('create', [App\Http\Controllers\FeedbackController::class,'create'])->middleware('auth');

