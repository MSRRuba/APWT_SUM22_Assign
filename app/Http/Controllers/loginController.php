<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class loginController extends Controller
{
    //
    function login(){
        return view('user.login');
    }

    function loginAuth(Request $req){
         $req->validate(
           [
               "email" => "required",
               "password" => "required"
           ]
        );
        $user = user::where('email', '=',$req -> email)->first();
        if($user){
              if($req->password == $user->password){
                if($user -> type == 'admin'){
                return redirect()->route('admin.dashboard');
            }
            else{
                return redirect()->route('user.dashboard');
            }

              }
              else{
                  return "Wrong password";
              }
        }
        else{
            return "Email doesn't exist";
        }
    }
}
