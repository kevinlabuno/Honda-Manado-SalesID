<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;

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
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'loginproses']);
Route::get('admindas', [AdminController::class, 'admindas'])->middleware('visitor');;
Route::get('logout', [LoginController::class, 'logout']);
Route::get('tambah', [AdminController::class, 'tambah']);
Route::post('tambah', [AdminController::class, 'tambahprosess']);
Route::get('admindata', [AdminController::class, 'admindata']);
Route::get('cars', [DataController::class, 'cars']);
Route::get('post/hapus/{id}',[AdminController::class, 'hapus']);