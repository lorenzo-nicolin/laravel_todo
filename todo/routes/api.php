<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/todoindex', [TodoItemController::class, 'index']);

Route::put('/todoitems/{todoItem}', [TodoItemController::class, 'update'])->name("update");
Route::post('/todoitems', [TodoItemController::class, 'store'])->name("store");
