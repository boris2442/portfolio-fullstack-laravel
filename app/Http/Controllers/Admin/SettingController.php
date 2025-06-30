<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;


class SettingController extends Controller
{
 
    public function index(){
        $user=User::findOrFail();
        return view('admin.setting.index-setting');
    }
}
