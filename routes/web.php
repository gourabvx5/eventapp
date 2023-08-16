<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class,'home']);

Route::get('/dash', [UserController::class,'dashboard']);

Route::get('/registration',[UserController::class,'show_register']);

Route::post('/register',[UserController::class,'register']);

Route::get('/log',[UserController::class,'show_login']);

Route::post('/login',[UserController::class,'login']);

// ALL Events

Route::get('/events', [EventController::class,'index']);

Route::get('/events/create', [EventController::class,'create']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/events/{id}/edit', [EventController::class, 'edit']);

Route::put('/events/{id}', [EventController::class, 'update']);

Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('posts.delete');

Route::get('/events/{id}',[EventController::class,'show'])->name('events.show');