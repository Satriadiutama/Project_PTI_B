<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/',[WebController::class , 'home'])->name('home');
Route::get('/home',[WebController::class , 'home'])->name('home');
Route::get('/about',[WebController::class , 'about'])->name('about');
Route::get('/skill',[WebController::class , 'skill'])->name('skill');
Route::get('/contact',[WebController::class , 'contact'])->name('contact');
