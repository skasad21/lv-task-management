<?php

use App\Http\Controllers\TasksController;
use GuzzleHttp\Promise\TaskQueue;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/ourpage', function () {
    return view('ourpage');
});

Route::get('/', [TasksController::class,'index']);
Route::get('/createTaskForm', [TasksController::class,'createTaskForm'])->name('createTaskForm');
Route::post('/createNewTask', [TasksController::class,'createNewTask'])->name('createNewTask');
Route::get('/editTaskForm/{id}', [TasksController::class,'editTaskForm'])->name('editTaskForm');
Route::post('/editTask', [TasksController::class,'editTask'])->name('editTask');
