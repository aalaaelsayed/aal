<?php
use App\Http\Controllers\blogController;
use App\Http\Controllers\adminBlogController;
use App\Http\Controllers\HomeController;
use App\models\User;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('index');
   return redirect('index');

});

Route::get('index',[blogController::class,'index'])->name('index');
Route::get('contact',[blogController::class,'contact'])->name('contact');
Route::get('about',[blogController::class,'about'])->name('about');
Route::get('post/{id}',[blogController::class,'post'])->name('post');



//Auth::routes();
Auth::routes(['verify'=>true]);
Route::get('log', [App\Http\Controllers\HomeController::class, 'indexxx'])->middleware('verified')->name('log');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexx'])->name('home');


