<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'render']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'render']);

Route::post('/register', [RegisterController::class, 'createUser']);

Route::get('/dashboard', [DashboardController::class, 'render']);

Route::get('/products', [DashboardController::class, 'products']);

Route::get('/tasks', [DashboardController::class, 'tasks']);

Route::get('/messages', [DashboardController::class, 'messages']);

Route::get('/logout', [DashboardController::class, 'logout']);

Route::fallback(function(){
    return view('404');
});