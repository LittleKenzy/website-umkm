<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

// Pages
Route::get('/tentang-kami', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/kontak', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/karir', [App\Http\Controllers\PageController::class, 'career'])->name('career');

// Services
Route::get('/layanan', [App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{service:slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');

// Portfolios
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolios.index');
Route::get('/portfolio/{portfolio:slug}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolios.show');

// Articles / Blog
Route::get('/blog', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('/blog/{article:slug}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');

// Contact Form
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

