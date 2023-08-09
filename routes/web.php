<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SpriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/", function() {
    if (Auth::check())
        return redirect()->route("sprites.index");
    return view("index");
})->name("index");

Route::get("/login", [AuthenticateController::class, "form"])->name("login");
Route::post("/login", [AuthenticateController::class, "submit"])->name("login.submit");
Route::get("/logout", [AuthenticateController::class, "logout"])->name("login.logout");

Route::get("/register", [RegisterController::class, "form"])->name("register");
Route::post("/register", [RegisterController::class, "submit"])->name("register.submit");

Route::middleware("auth")->group(function () {
    Route::resource("sprites", SpriteController::class);
});