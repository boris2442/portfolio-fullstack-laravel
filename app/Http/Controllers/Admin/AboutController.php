<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function edit()
    {
        $about = About::latest()->first();
        return view("admin.abouts.edit-about", [
            "about" => $about
        ]);
    }
    public function update(Request $request)
    {
        $validation = $request->validate([
            "name" => 'string/ max:255',
            "email" => "string/ max:255",
            "phone" => "string/ max:25",
            "adress" => "string/ max:50",
            "description" => "string",
            "summary" => "string/ max:255",
            "tagline" => "string/ max:255",
            "home_image" => "image/mimes:jpg, png, jpeg, gif/max:2048",
            "banner_image" => "image/mimes:jpg, png, jpeg, gif/max:2048",
            "cv" => "files/mimes:pdf/max:5120",
        ]);
        $about=About::latest()->first();
        $about->fill($validation);
        $about->save();
        return redirect()->route('edit-about')->with("success", "Edit statut with success");
    }
}
