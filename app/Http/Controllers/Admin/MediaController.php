<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //

    public function index()
    {
        $medias = Media::latest()->get();

        return view('admin.medias.index-medias', compact('medias'));
    }
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                "link" => "required|url|max:255|active_url",
                "icon" => "required|max:255|",

            ],
            [
                'link.required' => 'Le lien est obligatoire.',
                'link.url' => 'Le lien doit être une URL valide.',
                'link.max' => 'Le lien ne doit pas dépasser 255 caractères.',
                'link.active_url' => 'Le lien doit être un site actif.',

                'icon.required' => 'L’icône est obligatoire.',
                'icon.max' => 'L’icône ne doit pas dépasser 255 caractères.',
            ]
        );
        Media::create($validateData);
        return redirect()
            ->route('index-medias')
            ->with('success', 'Another medias create with success');
    }

    public function destroy($id){
        $media=Media::findOrFail($id);
        $media->delete();
        return redirect()->route('index-medias')->with('success', 'link destroy with success');
    }
}
