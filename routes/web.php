<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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


Route::get('/menu', function () {
    return view('menu');
});

Route::get('/login', [SessionController::class, 'index']);
Route::post('/user/login', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/user/create', [SessionController::class, 'create']);





