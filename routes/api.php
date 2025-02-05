<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; // Perbaikan di sini

// Route untuk API Resource
// Route::apiResource('categories', CategoryController::class);
Route::get("/categories", [CategoryController::class, 'index']);
Route::post("/categories", [CategoryController::class, 'store']);
Route::get("/categories/{id}", [CategoryController::class, 'show']);
Route::put("/categories/{id}", [CategoryController::class, 'update']);
Route::delete("/categories/{id}", [CategoryController::class, 'destroy']);


// Route untuk mendapatkan user yang sedang login
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
