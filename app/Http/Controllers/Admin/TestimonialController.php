<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    //
    public function index()
    {

        $testimonials = Testimonial::paginate(4);
        return view('admin.testimonial.index-testimonial', compact('testimonials'));
    }
    public function create()
    {

        return view('admin.testimonial.index-testimonial');
    }
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "name" => "required|string|max:244",
                "testimony" => "required|string|max:244",
                "function" => "required|string|max:244",
                "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ],
            [
                'name.required' => 'Le nom est obligatoire.',
                'name.string' => 'Le nom doit être une chaîne de caractères.',
                'name.max' => 'Le nom ne doit pas dépasser 244 caractères.',
                'function.required' => 'La fonction est obligatoire.',
                'function.string' => 'La fonction doit être une chaîne de caractères.',
                'function.max' => 'La fonction ne doit pas dépasser 244 caractères.',
                'testimony.required' => 'Le témoignage est obligatoire.',
                'testimony.string' => 'Le témoignage doit être une chaîne de caractères.',
                'testimony.max' => 'Le témoignage ne doit pas dépasser 1000 caractères.',
                'image.required' => 'L\'image est obligatoire.',
                'image.image' => 'Le fichier doit être une image.',
                'image.mimes' => 'L\'image doit être de type jpeg, png, jpg, gif ou svg.',
                'image.max' => 'L\'image ne doit pas dépasser 2 Mo.',
            ]
        );

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/testimonials'), $imageName);
            $validate['image'] = 'images/testimonials/' . $imageName;
        } else {
            $validate['image'] = 'images/testimonials/default.png'; // Default image if none is uploaded
        }

        Testimonial::create($validate);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial created successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success', 'Testimonial deleted successfully');
    }
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonial.index-testimonial', compact('testimonial'));
    }
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $validate = $request->validate(
            [
                "name" => "required|string|max:244",
                "function" => "required|string|max:244",
                "testimony" => "required|string|max:1000",
                "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ],
            [
                'name.required' => 'Le nom est obligatoire.',
                'name.string' => 'Le nom doit être une chaîne de caractères.',
                'name.max' => 'Le nom ne doit pas dépasser 244 caractères.',
                'function.required' => 'La fonction est obligatoire.',
                'function.string' => 'La fonction doit être une chaîne de caractères.',
                'function.max' => 'La fonction ne doit pas dépasser 244 caractères.',
                'testimony.required' => 'Le témoignage est obligatoire.',
                'testimony.string' => 'Le témoignage doit être une chaîne de caractères.',
                'testimony.max' => 'Le témoignage ne doit pas dépasser 1000 caractères.',
                'image.required' => 'L\'image est obligatoire.',
                'image.image' => 'Le fichier doit être une image.',
                'image.mimes' => 'L\'image doit être de type jpeg, png, jpg, gif ou svg.',
                'image.max' => 'L\'image ne doit pas dépasser 2 Mo.',
            ]
        );
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($testimonial->image && file_exists(public_path($testimonial->image))) {
                unlink(public_path($testimonial->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/testimonials'), $imageName);
            $validate['image'] = 'images/testimonials/' . $imageName;
        } else {
            // Keep the old image if no new image is uploaded
            $validate['image'] = $testimonial->image;
        }
        $testimonial->update($validate);
        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully');
    }




    //public function show($id)
    //{
    // $testimonial = Testimonial::findOrFail($id);
    // return view('admin.testimonial.show-testimonial', compact('testimonial'));
    //return view('admin.testimonial.index-testimonial');
    // }
    // public function search(Request $request)
    // {
    //   $search = $request->input('search');
    // $testimonials = Testimonial::where('name', 'LIKE', "%{$search}%")->paginate(4);
    // return view('admin.testimonial.index-testimonial', compact('testimonials'));
    // return view('admin.testimonial.index-testimonial');
    //}
    // public function paginate(Request $request)
    //{
    // $perPage = $request->input('per_page', 4);
    // $testimonials = Testimonial::paginate($perPage);
    // return view('admin.testimonial.index-testimonial', compact('testimonials'));
    // return view('admin.testimonial.index-testimonial');
    //}
    //public function filter(Request $request)
    // {
    // $filter = $request->input('filter');
    // $testimonials = Testimonial::where('category', $filter)->paginate(4);
    // return view('admin.testimonial.index-testimonial', compact('testimonials'));
    // return view('admin.testimonial.index-testimonial');
    // }
    //public function sort(Request $request)
    // {
    //  $sort = $request->input('sort', 'asc');
    // $testimonials = Testimonial::orderBy('created_at', $sort)->paginate(4);
    // return view('admin.testimonial.index-testimonial', compact('testimonials'));
    // return view('admin.testimonial.index-testimonial');
    //}
}
