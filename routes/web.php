<?php

use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SendSolutionController;
use App\Http\Controllers\utilityController;
use Illuminate\Support\Facades\Route;

//route for page home.
Route::get('/', 
[ProblemController::class, 'index'])->name('home');

// Problem routes
Route::prefix('problem')->group(function () {
    Route::get('/', [ProblemController::class, 'create'])->name('problem');
    Route::post('/store', [ProblemController::class, 'store'])->name('store.problem');
    Route::get('/show/{id}', [ProblemController::class, 'show'])->name('show.problem');
    Route::get('/edit/{problem}', [ProblemController::class, 'edit'])->name('edit.problem');
    Route::put('/update/{problem}', [ProblemController::class, 'update'])->name('update.problem');
})->name('app.problems');

// Solution routes
Route::prefix('solution')->group(function () {
    Route::get('/solution/{id}', [SendSolutionController::class, 'create'])->name('create.solution');
    Route::post('/store/solution', [SendSolutionController::class, 'store'])->name('store.solution');
    Route::get('/show/{id}', [SendSolutionController::class, 'show'])->name('show.solution');
    Route::get('/edit/{id}', [SendSolutionController::class, 'edit'])->name('edit.solution');
    Route::put('/update/{solution}', [SendSolutionController::class, 'update'])->name('update.solution');
})->name('app.utility');

// Utility routes
Route::prefix('utility')->group(function () {
    Route::get('/home/utility', [utilityController::class, 'index'])->name('utility.home');
    Route::get('/utility/create', [utilityController::class, 'create'])->name('utility.create');
    Route::post('/utility/store', [utilityController::class, 'store'])->name('utility.store');
    Route::get('/show/{id}', [utilityController::class, 'show'])->name('utility.show');
    Route::get('/edit/{id}', [utilityController::class, 'edit'])->name('utility.edit');
    Route::put('/utility/update/{utility}', [utilityController::class, 'update'])->name('utility.update');
})->name('utility');
