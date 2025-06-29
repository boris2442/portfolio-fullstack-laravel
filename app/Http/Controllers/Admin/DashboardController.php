<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Education;
use App\Models\Media;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Skill;
use App\Models\Project;
use App\Models\User;
use App\Models\Experience;
use App\Models\Message;
class DashboardController extends Controller
{
    // 
    public function index(){
        $abouts=About::all();
        $educations=Education::all();
        $medias=Media::all();
        $services=Service::all();
        $testimonials=Testimonial::all();
        $skills=Skill::all();
        $projects=Project::all();
        $experiences=Experience::all();
        $users=User::all();
        $messages=Message::all();
        return view('admin.dashboard', compact('abouts', 'educations', 'medias', 'services', 'skills', 'projects', 'users', 'experiences','testimonials', 'messages'));
    }
}
