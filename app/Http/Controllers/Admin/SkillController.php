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
     
        // $services=Service::all();
        // $skills=Skill::with('service')->orderBy('id','DESC' )->get()->paginate(4);
        $skills = Skill::with('service')->paginate(4);
        return view('admin.skills.index-skill', compact('skills'));
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect()->route('skill.index')->with('success', 'skill destroy with success');
    }
    // public function create()
    // {
    //     $services = Service::all();
    //     return view('admin.skills.create-skill', compact('services'));
    // }


    // public function store(Request $request)
    // {
    //     $validate = $request->validate(
    //         [
    //             "title" => "required|string|max:244",
    //             "icon" => "required|string|max:244|",
    //             "service_id" => "required|exists:services,id",
    //             "description" => "required|string"
    //         ]
    //     );
    //     Skill::create($validate);
    //     return redirect()->route('skill.index')->with('success', 'skill create with successfull');
    // }

    // public function edit($id)
    // {
    //     $skill = Skill::findOrFail($id);
    //     $services = Service::all();
    //     return view('admin.skills.edit-skill', compact('skill', 'services'));
    // }
    // public function update(Request $request, $id)
    // {
    //     $skill = Skill::findOrFail($id);
    //     $validate = $request->validate(
    //         [
    //             "title" => "required|string|max:244",
    //             "icon" => "required|string|max:244|",
    //             "service_id" => "required|exists:services,id",
    //             "description" => "required|string"
    //         ]
    //     );
    //     $skill->update($validate);
    //     return redirect()->route('skill.index')->with('success', 'skill update with successfull');
    // }
    // public function filter(Request $request)
    // {
    //     $query = Skill::query();
    //     if ($request->filled('title')) {
    //         $query->where('title', 'like', '%' . $request->input('title') . '%');
    //     }
    //     if ($request->filled('service_id')) {
    //         $query->where('service_id', $request->input('service_id'));
    //     }
    //     return $query->paginate(4);
    // }
    // public function search(Request $request)
    // {
    //     $skills = $this->filter($request);
    //     return view('admin.skills.index-skill', compact('skills'));
    // }
    // public function show($id)
    // {
    //     $skill = Skill::findOrFail($id);
    //     return view('admin.skills.show-skill', compact('skill'));
    // }
    // public function getSkillsByService($serviceId)
    // {
    //     $skills = Skill::where('service_id', $serviceId)->get();
    //     return response()->json($skills);
    // }
    // public function getSkillsByServiceId(Request $request)
    // {
    //     $serviceId = $request->input('service_id');
    //     $skills = Skill::where('service_id', $serviceId)->get();
    //     return response()->json($skills);
    // }
   
}
