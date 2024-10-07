<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
route::post('/students', [StudentController::class, 'store']);
route::get('/students/{id}', [StudentController::class, 'show']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);