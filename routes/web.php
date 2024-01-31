<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('login');
});

Route::middleware(['statuslogin'])->group(function(){
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'search']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::post('/users/add', [UserController::class, 'add']);
    Route::get('/users/hapus/{id}', [UserController::class, 'hapus']);
    Route::get('/users/edit/{id}',[UserController::class,'edit']);
    Route::post('/users/update/{id}',[UserController::class,'update']);


});

Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);




