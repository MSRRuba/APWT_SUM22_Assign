<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class adminController extends Controller
{
    //
    function dashboard(){
        $users = user::all();
        return view('admin.dashboard')->with('users',$users);
    }
}
