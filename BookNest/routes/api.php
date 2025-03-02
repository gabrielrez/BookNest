<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/users/register', [UsersController::class, 'register']);
Route::post('/users/login', [UsersController::class, 'login']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{$id}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::delete('/books/{id}', [BookController::class, 'delete']);

Route::get('/books/{id}/notes', [NotesController::class, 'index']);
Route::get('/books/{id}/notes/{id}', [NotesController::class, 'show']);
Route::post('/books/{id}/notes', [NotesController::class, 'store']);
Route::delete('/books/{id}/notes/{id}', [NotesController::class, 'delete']);
