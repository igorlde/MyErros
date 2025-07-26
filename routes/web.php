<?php

use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SendSolutionController;
use Illuminate\Support\Facades\Route;

//route for page home.
Route::get('/', 
[ProblemController::class, 'index'])->name('home');

//route group for all my routes of problem
Route::group(['prefix', 'problem'], function(){
Route::get('/problem',
[ProblemController::class, 'create'])->name('problem');

Route::post('/store/problem',
[ProblemController::class, 'store'])->name('store.problem');

Route::get('/show/{id}',
[ProblemController::class, 'show'])->name('show.problem');

Route::get('/edit/{id}',
[ProblemController::class, 'edit'])->name('edit.problem');

Route::put('/update/{id}',
[ProblemController::class, 'update'])->name('update.problem');

})->name('app.problems');

//group for utility codes
Route::group(['prefix', 'utility'], function(){
    Route::get('/solution', 
    [SendSolutionController::class, 'create'])->name('create.solution');

    Route::post('/store/solution', 
    [SendSolutionController::class, 'store'])->name('store.solution');

    Route::get('/show/{id}', 
    [SendSolutionController::class, 'show'])->name('show.solution');

    Route::get('/edit/{id}',
    [SendSolutionController::class, 'edit'])->name('edit.solution');

    Route::put('/update/{id}',
    [SendSolutionController::class, 'update'])->name('update.solution');

})->name('app.utility');
