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
}
