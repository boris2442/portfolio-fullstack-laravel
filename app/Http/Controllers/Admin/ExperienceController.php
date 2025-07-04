<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    //
    public function index()
    {
        $experiences = Experience::paginate(4);
        return view('admin.experience.index-experience', compact('experiences'));
        // return view('admin.experience.index-experience');
    }
    public function create()
    {
        return view('admin.experience.index-experience');
    }
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "company" => "required|string|max:244",
                "period" => "required|string|max:244|",
                "position" => "required|string|max:255",
            ]
        );
        Experience::create($validate);
        return redirect()->route('experience.index')->with('success', 'experience create with successfull');
    }
    public function destroy($id)
    {
         $experience = Experience::findOrFail($id);
         $experience->delete();
        return redirect()->route('experience.index')->with('success', 'experience destroy with success');
    }
    public function edit($id)
    {
         $experience = Experience::findOrFail($id);
         return view('admin.experience.edit-experience', compact('experience'));
        return view('admin.experience.edit-experience');
    }
    public function update(Request $request, $id)
    {
        $experience = Experience::findOrFail($id);
        $validate = $request->validate(
            [
                "title" => "required|string|max:244",
                "description" => "required|string|max:244|",
                "period" => "required|string|max:255",
            ]
        );
        $experience->update($validate);
        return redirect()->route('experience.index')->with('success', 'experience update with successfull');
    }
}
