<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// Bài 1
Route::get('/', [HomeController::class, 'index']);

// Bài 2
Route::get('/products', [ProductController::class, 'list']);

// Bài 3
Route::get('/home', function () { return view('home'); });
Route::get('/contact', function () { return view('contact'); });

// Bài 4
Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);