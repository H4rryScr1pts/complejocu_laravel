<?php
use App\Http\Controllers\ParkingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   return $request->user();
});

// Get
Route::get("/eventos", [ApiController::class, "eventos"]);
Route::get("/evento/{id}", [ApiController::class, "evento"]);
Route::get("/cajones", [ApiController::class, "cajones"]);
Route::get("/cajon/{id}", [ApiController::class, "getDrawer"]);
Route::get("/usuarios", [ApiController::class, "usuarios"]);
Route::get("/usuario/{user:email}", [ApiController::class, "usuario"]);
Route::get("/estacionamientos", [ApiController::class, "estacionamientos"]);
Route::get("/estacionamiento/{parking:id}", [ApiController::class, "estacionamiento"]);

// Post
Route::post("/modificar-cajon", [ApiController::class, "setDrawer"]);
