<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

use Companybase\Http\Controllers\Frontend\ContactController;

use Companybase\Http\Controllers\Frontend\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'sendContact']);

Route::post('/contact', [ContactController::class, 'contactStore'])->name('contact.store');

