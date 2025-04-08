<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect('/books');
});

Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create'])->name('books.create');
Route::post('/store', [App\Http\Controllers\BookController::class, 'store'])->name('books.store');
Route::get('/book/:id', [App\Http\Controllers\BookController::class, 'show'])->name('books.show');
