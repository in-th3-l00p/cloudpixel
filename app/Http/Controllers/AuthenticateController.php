<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function form() {
        if (auth()->check()) 
            return to_route("index");
        return view("login");
    }

    public function submit(Request $request) {
        $credentials = $request->validate([
            "email" => "required|max:255|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return to_route("index");
        }

        return back()->withErrors(["email" => "Incorrect email or password"]);
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("index");
    }
}
