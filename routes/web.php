<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class,'index']);
Route::post('/savetask', [TaskController::class,'store'])->name('savetask');


