<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\RegisterController;

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
Route::post('/logout', [LogoutController::class, "store"])->name("logout");

// Admin
Route::get("/dashboard", [AdminController::class, "index"])->name("admin");
Route::get("/dashboard/events", [EventController::class, "index"])->name("admin.eventos");
Route::get("/dashboard/organizers", [OrganizerController::class, "index"])->name("admin.organizadores");
Route::get("/dashboard/parking", [ParkingController::class, "index"])->name("admin.parking");