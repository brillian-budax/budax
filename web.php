<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;

Route::get('/', function () {
    return view('welcome');
});

// Group routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [LoanController::class, 'index'])->name('dashboard');

    Route::get('/loan/create', [LoanController::class, 'create'])->name('loan.create');
    Route::post('/loan/store', [LoanController::class, 'store'])->name('loan.store');
    Route::get('/loan/edit/{id}', [LoanController::class, 'edit'])->name('loan.edit');
    Route::put('/loan/update/{id}', [LoanController::class, 'update'])->name('loan.update');
    Route::delete('/loan/delete/{id}', [LoanController::class, 'destroy'])->name('loan.delete');
});
