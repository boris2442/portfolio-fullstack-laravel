<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $about=About::latest()->first();
         $services=Service::All();
        return view('pages.home-page.index-home',compact('about','services')
    );
    }
    // public function affichService(){
       
    //      return view('pages.home-page.index-home',compact('services'));
    // }
}
