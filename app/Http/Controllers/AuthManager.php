<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthManager extends Controller
{
    function login(){
        return view('login');
    }
    function registration(){
        return view('registration');
    }
    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('index'))->with('success',"Login details are not valid");
        }
        return redirect(route('login'))->with('error',"Login details are not valid");
    }
    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:flights',
            'password'=> 'required'
        ]);
        $date['name'] = $request->name;
        $date['email'] = $request->email;
        $date['password'] = Hash::make($request->password);

        $user = User::create($date);
        if(!$user){
            return redirect(route('registration'))->with('error',"Registration details are not valid");
        }
        return redirect()->intended(route('login'))->with('success',"Registration done succefuly");

    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('index'));


    }

}
