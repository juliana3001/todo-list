<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class)
    ->except(['show']);

Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])
    ->name('tasks.toggle');