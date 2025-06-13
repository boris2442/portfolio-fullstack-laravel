<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function edit(){
    $about=About::latest()->first();
        return view("admin.abouts.edit-about", [
            "about"=>$about
        ]);

    }
}
