<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\AccountController;
use App\Models\Category;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can accounts web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CourseController::class, 'index']);
Route::post('/register', [AccountController::class, 'store']);
Route::get('/register', [AccountController::class, 'registerPage']);
Route::post('/login', [AccountController::class, 'login']);
Route::post('/logout', [AccountController::class, 'logout']);
Route::get('/login', [AccountController::class, 'loginPage']);
Route::get('courses/{courseAuthorSlug}/{courseSlug}', [CourseController::class, 'show']);

