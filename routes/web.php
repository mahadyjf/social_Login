<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginRegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;

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

Route::get('/', [homeController::class, 'HomeIndex']);

Route::get('/CallGithub', [UserLoginRegistrationController::class, 'CallGithub']);
Route::get('/LoginCallBack', [UserLoginRegistrationController::class, 'LoginCallBack']);
Route::get('/Logout', [UserLoginRegistrationController::class, 'Logout']);



Route::get('/dashboard', [DashboardController::class, 'DashboardIndex'])->middleware('loginCheck');
