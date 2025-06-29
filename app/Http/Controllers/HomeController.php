<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Testimonial;

class HomeController extends Controller
{
    //
    public function index()
    {
        $about = About::latest()->first();
        $services = Service::All();
        $educations = Education::All();
        $testimonials = Testimonial::All();

        return view('pages.home-page.index-home', compact('about', 'services', 'educations', 'testimonials'));
    }
    // public function create(){
    //     return view('pages.home-page.index-home';)
    // }
    // public function store()
}
