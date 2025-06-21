<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class SkillController extends Controller
{
    //
    public function index()
    {
        $services=Service::all();
        // $skills=Skill::with('service')->orderBy('id','DESC' )->get()->paginate(4);
        $skills = Skill::with('service')->paginate(4);
        return view('admin.skills.index-skill', compact('skills'));
    }
}
