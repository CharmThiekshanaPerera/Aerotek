<?php

use Illuminate\Support\Facades\Route;
use Phyxle\Contact\Controllers\ContactController;

Route::middleware('web')->group(function () {
    Route::prefix('/')->group(function () {
        Route::post('/contact/mail', [ContactController::class, 'mail'])->name('contact.mail');
        Route::resource('/contact', ContactController::class)->only(['index']);
    });
});
