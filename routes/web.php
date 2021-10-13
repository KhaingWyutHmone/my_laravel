<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::resource('posts',HomeController::class)->middleware('auth');

Route::view('/test','about');

Route::get('/hello', [HomeController::class,'hello'])->name('hello');
Route::get('/hi', [HomeController::class,'hi'])->name('hi');



Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeController::class, 'index'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout']);