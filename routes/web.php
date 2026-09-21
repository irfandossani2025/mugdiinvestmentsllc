<?php

use App\Http\Controllers\AiConciergeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/it-solutions', 'it-solutions')->name('it-solutions');
Route::view('/it-solutions/ai-bots-agents', 'ai-bots-agents')->name('ai-bots-agents');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/ai/advise', AiConciergeController::class)->middleware('throttle:12,1')->name('ai.advise');
Route::post('/contact', ContactController::class)->middleware('throttle:8,1')->name('contact.store');
