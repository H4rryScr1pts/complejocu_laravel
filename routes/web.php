<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
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

// Sección Publica
Route::get('/', [PagesController::class, "index"])->name("/");
Route::get('/about', [PagesController::class, "about"])->name("about");
Route::get('/services', [PagesController::class, "services"])->name("services");
Route::get('/events', [PagesController::class, "events"])->name("events");
Route::get('/location', [PagesController::class, "location"])->name("location");
Route::get('/contact', [PagesController::class, "aboud"])->name("contact");

// Auth
Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class, "store"])->name("login");
Route::get('/register', [RegisterController::class, "index"])->name("registro");
Route::post('/register', [RegisterController::class, "store"])->name("registro");

// Admin
Route::get("/admin", [AdminController::class, "index"])->name("admin");