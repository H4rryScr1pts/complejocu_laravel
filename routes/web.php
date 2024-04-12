<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
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
Route::get("/admin", [AdminController::class, "index"])->name("admin");
Route::get("/admin/events", [EventController::class, "index"])->name("admin.eventos");

// Events
Route::get("/addmin/events/create", [EventController::class, "create"])->name("admin.eventos.create");
Route::post("/admin/events/create", [EventController::class, "store"])->name("admin.event.store");

// Organizers
Route::get("/admin/organizers", [OrganizerController::class, "index"])->name("admin.organizadores");
Route::get("/admin/organizers/create", [OrganizerController::class, "create"])->name("admin.organizadores.create");
Route::post("/admin/organizers/create", [OrganizerController::class, "create_store"])->name("admin.organizadores.create");
Route::get("/admin/organizers/edit/{organizer:id}", [OrganizerController::class, "edit"])->name("admin.organizadores.edit");
Route::post("/admin/organizers/edit/store", [OrganizerController::class, "edit_store"])->name("admin.organizadores.edit.store");
Route::post("/admin/organizers/delete", [OrganizerController::class, "delete"])->name("admin.organizadores.delete");

// Parking
Route::get("/admin/parking", [ParkingController::class, "index"])->name("admin.parking");

// Images
Route::post("/images", [ImageController::class, "store"])->name("image.store");

// Profile
Route::get("/profile", []);