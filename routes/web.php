<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::resource('/', BaseController::class)->only(['index']);
    Route::resource('/about', AboutController::class)->only(['index']);
    Route::resource('/projects', ProjectController::class)->only(['index']);
    Route::resource('/project-categories', ProjectCategoryController::class)->only(['show'])->scoped(['project_category' => 'slug']);
    Route::resource('/products', ProductController::class)->only(['index'])->scoped(['product' => 'slug']);
    Route::resource('/product-categories', ProductCategoryController::class)->only(['show'])->scoped(['product_category' => 'slug']);
    Route::resource('/services', ServiceController::class)->only(['index']);
});
