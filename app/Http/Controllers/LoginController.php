<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index(){
        return view('auth.login');
    }

    function login_route(Request $request){
        dsfsdfs
        $email = $request->input("email");
        $password = $request->input("password");
        $check = User::where("email", $email)->first();
        if (Hash::check($password, $check->password) && $check->email == $email) {
            // return 'logged in';
            Session::put('login', $check->email);
            Session::put('register', $check->email);
            Session::put('email',$check->email);
            return redirect('/home');
        } else {
            dd('hi iam altron');
        }
    }

    function logout(){
        Session::forget(['login', 'register', 'email']);
        return redirect('/login');
    }
}
