<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\EmailController;

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

// WebController
Route::get("/", [WebController::class, "home"]);
Route::get("/home", [WebController::class, "home"]);
Route::get("/migraciones", [WebController::class, "migraciones"]);
Route::get("/seeders", [WebController::class, "seeders"]);
Route::get("/email", [WebController::class, "email"]);

// EmailController
Route::get("/enviar-email", [EmailController::class, "enviar_email"]);