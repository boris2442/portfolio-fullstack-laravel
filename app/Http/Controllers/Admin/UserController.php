<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('admin.user.index-user', compact('users'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'biographie' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string|min:6',
            'image' => 'required|mimes:jpeg,gif,png,webm,jpg|max:2048',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);
            $validateData['image'] = "$imageName";
        } else {
            $validateData['image'] = 'images/users/default.png';
        }


        User::create($validateData);
        redirect()->route('user.index')->with('success', 'user add with successfull');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit-user', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validateData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'biographie' => 'required|string',
            'role' => 'required|string',
            'password' => 'nullable|string|min:6',
        ]);

        if ($request->filled('password')) {
            $validateData['password'] = Hash::make($validateData['password']);
        } else {
            unset($validateData['password']);
        }

        $user->update($validateData);
        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }
}
