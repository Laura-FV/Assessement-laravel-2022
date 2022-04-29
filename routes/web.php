<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ShowTaskController;
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

Route::get('/', [TaskController::class, 'index']);

Route::get('/task/{task}', [App\Http\Controllers\TaskController::class, 'show']);

Route::get('/delete/{task}', [App\Http\Controllers\DeleteController::class, 'delete']);

Route::get('/index2', [TaskController::class, 'indexordered']);
