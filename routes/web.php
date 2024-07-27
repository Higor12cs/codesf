<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
Route::get('/projetos', [ProjectController::class, 'index'])->name('projects');
Route::get('/projetos/{project:slug}', [ProjectController::class, 'show'])->name('project');
Route::post('/contato', ContactController::class)->name('contact');
