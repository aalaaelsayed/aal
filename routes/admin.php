<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MassagesController;
use App\Http\Controllers\adminBlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Auth\Middleware\Authenticate;


use App\models\User;

Route::group([], function () {
//////////////////////
Route::get('posts',[adminBlogController::class,'index'])->name('posts');
Route::get('createpost',[adminBlogController::class,'create'])->name('createpost');
Route::post('addPost',[adminBlogController::class,'store'])->name('addPost');
Route::get('editpost/{id}',[adminBlogController::class,'edit'])->middleware('verified')->name('editpost');
Route::put('updatePost/{id}',[adminBlogController::class,'update'])->middleware('verified')->name('updatePost');
Route::get('deletePost/{id}',[adminBlogController::class,'destroy'])->middleware('verified')->name('deletePost');
Route::get('trashedPost',[adminBlogController::class,'trashed'])->middleware('verified')->name('trashedPost');
Route::get('forceDelete/{id}',[adminBlogController::class,'forceDelete'])->middleware('verified')->name('forceDelete');
Route::get('restorePost/{id}',[adminBlogController::class,'restore'])->middleware('verified')->name('restorePost');

//////////////////////////////////////
Route::get('users',[UserController::class,'index'])->middleware('verified')->name('users');
Route::get('createuser',[UserController::class,'create'])->middleware('verified')->name('createuser');
Route::post('addusers',[UserController::class,'store'])->middleware('verified')->name('addusers');
Route::get('edituser/{id}',[UserController::class,'edit'])->middleware('verified')->name('edituser');
Route::put('updateuser/{id}',[UserController::class,'update'])->middleware('verified')->name('updateuser');
///////////////////////////



});
?>