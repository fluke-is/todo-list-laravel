<?php

use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToDoListController::class, 'index'])->name('index');
Route::post('/', [ToDoListController::class, 'store'])->name('store');
Route::delete('/{ToDoList:id}', [ToDoListController::class, 'destroy'])->name('destroy');