<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\pageController;
use App\HTTP\Controllers\userController;
use App\HTTP\Controllers\loginController;
use App\HTTP\Controllers\adminController;

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

Route::get('/', [pageController::class, 'home'])->name('home.home');
Route::get('/user/create', [userController::class, 'create'])->name('user.create');
Route::post('/user/create', [userController::class, 'regValidation']);
Route::get('/user/login', [loginController::class, 'login'])->name('user.login');
Route::post('/user/login', [loginController::class, 'loginAuth']);
Route::get('/user/dashboard', [userController::class, 'dashboard'])->name('user.dashboard');
Route::get('/admin/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/user/details/{id}', [userController::class, 'details'])->name('user.details');