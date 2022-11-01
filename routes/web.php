<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\PaginationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[TaskController::class,'addTask']);

Route::post('/create-task',[TaskController::class,'createTask'])->name('task.create');

Route::get('/tasks',[TaskController::class,'getTask']);

Route::get('/delete-task/{id}',[TaskController::class,'deleteTask']);

Route::get('/edit-task/{id}',[TaskController::class,'editTask']);

Route::post('/update-task',[TaskController::class,'updateTask'])->name('task.update');

Route::get('/tasks',[PaginationController::class,'allTasks']);