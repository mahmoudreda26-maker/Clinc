<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUser;
class AuthController extends Controller
{
    public function login(){
        return view('client.pages.auth.login');
    }
    public function register(){
        return view('client.pages.auth.register');
    }
    public function contact(){
        return view('client.pages.auth.contact');
    }
    public function submitRegister(RegisterUser $request){

        $data =$request->validated();
        $data ['password']= Hash::make($data['password']);
        User::create($data);
        return redirect()->route("auth.login")->with("success", "Registered successfully, please login");

    }
}
