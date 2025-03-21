<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class, 'HomePage'])->name('HomePage');
Route::get('/about',[UserController::class, 'AboutPage'])->name('AboutPage');
Route::get('/about',[UserController::class, 'AboutPage'])->name('AboutPage');
Route::get('/resume', [UserController::class,'ResumePage'])->name('resume');
Route::get('/project', [UserController::class,'ProjectPage'])->name('project');
Route::get('/blog', [UserController::class,'BlogPage'])->name('blog');

Route::get('/contact', [UserController::class,'ContactPage'])->name('contact');





