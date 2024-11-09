<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewspaperController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\SkripsiController;
use App\Http\Controllers\CDController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/newspaper/{sort?}', [NewspaperController::class, 'index']);

Route::get('/CD/{sort?}', [CDController::class, 'index']);

Route::get('/journal/{sort?}', [JournalController::class, 'index']);

Route::get('/book/{sort?}', [BookController::class, 'index']);

Route::get('/skripsi/{sort?}', [SkripsiController::class, 'index']);
