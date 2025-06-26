<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::paginate(5);

        return view('admin.project.index-project', compact('projects'));
    }
    public function create()
    {

        return view('admin.project.index-project');
    }
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "title" => "required|string|max:244",
                "description" => "required|string|max:244",
                "link" => "required|url|active_url|max:1000",
                "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ],
            [
                'title.required' => 'Le title est obligatoire.',
                'title.string' => 'Le title doit être une chaîne de caractères.',
                'title.max' => 'Le title ne doit pas dépasser 244 caractères.',
                'description.required' => 'La description est obligatoire.',
                'description.string' => 'La description doit être une chaîne de caractères.',
                'description.max' => 'La description ne doit pas dépasser 244 caractères.',
                'link.required' => 'Le link est obligatoire.',
                'link.string' => 'Le link doit être une chaîne de caractères.',
                'link.max' => 'Le link ne doit pas dépasser 1000 caractères.',
                'image.required' => 'L\'image est obligatoire.',
                'image.image' => 'Le fichier doit être une image.',
                'image.mimes' => 'L\'image doit être de type jpeg, png, jpg, gif ou svg.',
                'image.max' => 'L\'image ne doit pas dépasser 2 Mo.',
                'link.active_url' => 'Le lien doit être un site actif.',
                'link.url' => 'Le lien doit être une URL valide.',


            ]
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/projects'), $imageName);
            $validate['image'] = 'images/projects/' . $imageName;
        } else {
            $validate['image'] = 'images/projects/default.png'; // Default image if none is uploaded
        }

        Project::create($validate);

        return redirect()->route('project.index')->with('success', 'Project created successfully');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index')->with('success', 'project deleted successfully');
    }
    public function edit($id)
    {
            $projects = Project::paginate(5); //
        $project = Project::findOrFail($id);

        return view('admin.project.index-project', compact('project', 'projects'));
    }
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $validate = $request->validate(
            [
                "title" => "required|string|max:244",
                "description" => "required|string|max:244",
                "link" => "required|string|max:55",
                "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ],
            [
                'title.required' => 'Le title est obligatoire.',
                'title.string' => 'Le title doit être une chaîne de caractères.',
                'title.max' => 'Le title ne doit pas dépasser 244 caractères.',
                'description.required' => 'La description est obligatoire.',
                'description.string' => 'La description doit être une chaîne de caractères.',
                'description.max' => 'La description ne doit pas dépasser 244 caractères.',
                'link.required' => 'Le link est obligatoire.',
                'link.string' => 'Le link doit être une chaîne de caractères.',
                'link.max' => 'Le link ne doit pas dépasser 1000 caractères.',
                'image.required' => 'L\'image est obligatoire.',
                'image.image' => 'Le fichier doit être une image.',
                'image.mimes' => 'L\'image doit être de type jpeg, png, jpg, gif ou svg.',
                'image.max' => 'L\'image ne doit pas dépasser 2 Mo.',


            ]
        );
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/projects'), $imageName);
            $validate['image'] = 'images/projects/' . $imageName;
        } else {
            // Keep the old image if no new image is uploaded
            $validate['image'] = $project->image;
        }
        $project->update($validate);
        return redirect()->route('project.index')->with('success', 'project updated successfully');
    }
}
