<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index(Request $request)
    {
        // $services = Service::all();
        $services = Service::filter($request)->get();
       
        // $services = $servicesQuery->paginate(5);
        
        return view('admin.services.index-service', compact('services' ));
    }
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'link destroy with success');
    }

    public function create()
    {
        return view('admin.services.index-service');
    }
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "title" => "required|string|max:244",
                "icon" => "required|string|max:244|",
                "description" => "required|string|max:255"
            ]
        );
        Service::create($validate);
        return redirect()->route('service.index')->with('success', 'service create with successfull');
    }
}
