<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function edit()
    {
        $about = About::latest()->first();
        return view("admin.abouts.edit-about", [
            "about" => $about
        ]);
    }
    public function update(Request $request)
    {
        $validation = $request->validate(
            [
                "name" => "string|max:255",
                "email" => "string|max:255",
                "phone" => "string|max:25",
                "adress" => "string|max:50",
                "description" => "string",
                "summary" => "string|max:255",
                "tagline" => "string|max:255",
                "home_image" => "image|mimes:jpg,png,jpeg,gif|max:2048",
                "banner_image" => "image|mimes:jpg,png,jpeg,gif|max:2048",
                "cv" => "files|mimes:pdf|max:5120",
            ],
            [
                'name.string' => 'Le champ name doit être une chaîne de caractères.',
                'name.max' => 'Le champ name ne doit pas dépasser 255 caractères.',

                'email.string' => 'Le champ email doit être une chaîne de caractères.',
                'email.max' => 'Le champ email ne doit pas dépasser 255 caractères.',

                'phone.string' => 'Le champ phone doit être une chaîne de caractères.',
                'phone.max' => 'Le champ phone ne doit pas dépasser 25 caractères.',

                'adress.string' => 'Le champ adress doit être une chaîne de caractères.',
                'adress.max' => 'Le champ adress ne doit pas dépasser 50 caractères.',

                'description.string' => 'Le champ description doit être une chaîne de caractères.',

                'summary.string' => 'Le champ summary doit être une chaîne de caractères.',
                'summary.max' => 'Le champ summary ne doit pas dépasser 255 caractères.',

                'tagline.string' => 'Le champ tagline doit être une chaîne de caractères.',
                'tagline.max' => 'Le champ tagline ne doit pas dépasser 255 caractères.',

                'home_image.image' => 'Le champ home_image doit être une image.',
                'home_image.mimes' => 'Le fichier home_image doit être de type : jpg, png, jpeg, gif.',
                'home_image.max' => 'Le fichier home_image ne doit pas dépasser 2048 kilo-octets.',

                'banner_image.image' => 'Le champ banner_image doit être une image.',
                'banner_image.mimes' => 'Le fichier banner_image doit être de type : jpg, png, jpeg, gif.',
                'banner_image.max' => 'Le fichier banner_image ne doit pas dépasser 2048 kilo-octets.',

                'cv.file' => 'Le champ cv doit être un fichier.',
                'cv.mimes' => 'Le fichier cv doit être de type : pdf.',
                'cv.max' => 'Le fichier cv ne doit pas dépasser 5120 kilo-octets.',
            ]

        );
        $about = About::latest()->first();
        $about->fill($validation);
        if ($request->hasFile('home_image')) {
            $oldImagePath = $about->home_image ? public_path("storage/images/{$about->home_image}") : null;
            if ($oldImagePath && file_exists($oldImagePath)) {
                //supprime un fichier similaire a la function Unix
                unlink($oldImagePath);
            }
            $file = $request->file('home_image');
            $fileName = '_home_image' . $file->getClientOriginalExtension();

            // dd($file);
            $file->move(public_path('storage/images'), $fileName);
            $about->home_image = $fileName;
        }



        if ($request->hasFile('banner_image')) {
            $oldImagePath = $about->banner_image ? public_path("storage/images/{$about->banner_image}") : null;
            if ($oldImagePath && file_exists($oldImagePath)) {
                //supprime un fichier similaire a la function Unix
                unlink($oldImagePath);
            }
            $file = $request->file('banner_image');
            $fileName = '_banner_image' . $file->getClientOriginalExtension();

            // dd($file);
            $file->move(public_path('storage/images'), $fileName);
            $about->home_image = $fileName;
            $about->banner_image = $fileName;
        }

        $about->save();

        return redirect()->route('edit-about')->with("success", "Edit statut with success");
    }
}
