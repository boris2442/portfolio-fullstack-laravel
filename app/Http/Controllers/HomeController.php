<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Message;
use App\Models\Service;
use App\Models\Education;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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
    //  public function create(){
    //      return view('pages.home-page.index-home');
    //  }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'project' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $about = About::latest()->first();
        $services = Service::All();
        $educations = Education::All();
        $testimonials = Testimonial::All();
        Message::create($validateData);
        return view('pages.home-page.index-home', compact('about', 'services', 'educations', 'testimonials'));
    }
}
