<?php

use App\Http\Controllers\TodoItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todoindex', [TodoItemController::class, 'index']);


