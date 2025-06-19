<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Education;

class HomeController extends Controller
{
    //
    public function index()
    {
        $about = About::latest()->first();
        $services = Service::All();
        $educations = Education::All();

        return view('pages.home-page.index-home', compact('about', 'services', 'educations'));
    }
}
