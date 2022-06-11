<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    //

    function create(){
        return view('user.create');
    }

    function regValidation(Request $req){
        $this->validate($req,
        [
            "name" => "required|min:3|max:20|regex:/^[a-zA-Z\s\.-]+$/",
            "email" => "required|regex: /^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/", 
            "gender" => "required",
            "password" => "required|min:8|regex:/^S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",
            "conf_password" => "required|same:password"
        ]);

        $user = new user;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->dob = $req->dob;
        $user->password = $req->password;
        $user->type = "user";
        $user -> save();
        return redirect()->route('home.home');


    }

    function dashboard(){
        $users = user::all();

        return view('user.dashboard')->with('users', $users);
    }

    public function details($id){
        
        $users = user::find($id);
        return view('user.details', [
            'users' => $users
        ]);

        
    }
}
