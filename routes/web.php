<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NotesController;

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

Route::get("/register", [RegisterController::class, "show"]);
Route::post("/register", [RegisterController::class, "register"]);
Route::get("/login", [LoginController::class, "show"])->name("login");
Route::post("/login", [LoginController::class, "login"]);

Route::group(["middleware" => ["auth"]], function () {
    Route::get("/logout", [LogoutController::class, "logout"]);
    Route::get("/notes", [NotesController::class, "show"]);
    Route::get("/add-note", [NotesController::class, "addNewNoteGet"]);
    Route::post("/add-note", [NotesController::class, "addNewNotePost"]);
    Route::get("/home", [HomeController::class, "show"]);
    Route::get("/", [HomeController::class, "show"]);
});
