<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(Request $request) {
        if (auth()->check())
            return to_route("index");
        return view("register"); 
    }

    public function submit(Request $request) {
        User::create($request->validate([
            "name" => "required|max:255|unique:users,name",
            "email" => "required|email|unique:users,email",
            "password" => "required|max:255|min:8"
        ]));
        return to_route("login")->with(["success", "Account created successfully"]);
    }
}
