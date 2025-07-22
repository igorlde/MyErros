<?php

use App\Http\Controllers\ProblemController;
use Illuminate\Support\Facades\Route;
//route for page home.
Route::get('/home', 
[ProblemController::class, 'index'])->name('home');

//route for page create code.
Route::get('/problem',
[ProblemController::class, 'create'])->name('problem');

//route for store the datas of form.
Route::post('/store/problem',
[ProblemController::class, 'store'])->name('store.problem');

//is route to show datas from a problem who you seek
Route::get('/show',
[ProblemController::class, 'show'])->name('show.problem');

//route for edit a problem the seek.
