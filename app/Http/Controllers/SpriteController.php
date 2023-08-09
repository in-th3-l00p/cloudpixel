<?php

namespace App\Http\Controllers;

use App\Models\Sprite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpriteController extends Controller
{
    public function index() {
        return view("sprites.index", ["sprites" => Sprite::latest()->paginate(7)]) ;
    }

    public function create()
    {
        return view("sprites.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|max:255|alpha_num",
            "width" => "required|numeric|between:1,128",
            "height" => "required|numeric|between:1,128"
        ]);
        $data["user_id"] = Auth::user()->id;
        $data["data"] = str_pad("", 4  * $data["width"] * $data["height"], chr(0));
        $sprite = Sprite::create($data);
        
        return redirect()->route("sprites.show", ["sprite" => $sprite]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sprite $sprite)
    {
        return view("sprites.show", ["sprite" => $sprite]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sprite $sprite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sprite $sprite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sprite $sprite)
    {
        //
    }
}
