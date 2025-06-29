<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function index(){
        $messages=Message::all();
        return view('admin.message.index-message', compact('messages'));
    }
public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('message.index')->with('success', 'message deleted successfully');
    }
}
