<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index()
    {
        $educations = Education::All();
        return view('admin.education.index-education', compact('educations'));
    }
       public function destroy($id)
    {
        $service = Education::findOrFail($id);
        $service->delete();
        return redirect()->route('education.index')->with('success', 'education destroy with success');
    }


        public function create()
    {
        return view('admin.education.index-education');
    }
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "institution" => "required|string|max:244",
                "period" => "required|string|max:244|",
                "degree" => "required|string|max:255",
                "departement" => "required|string|max:244|",
            ]
        );
        Education::create($validate);
        return redirect()->route('education.index')->with('success', 'education create with successfull');
    }


}
