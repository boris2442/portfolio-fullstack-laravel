<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $about=About::latest()->first();
        return view('pages.home-page.index-home',compact('about')
    );
    }
}
