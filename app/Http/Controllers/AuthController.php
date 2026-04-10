<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUser;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route("home");
        } elseif (Auth::guard('admin')->check()) {
            return redirect()->route(" admin.home");
        }
        return view('client.pages.auth.login');
    }
    public function register()
    {
        return view('client.pages.auth.register');
    }
    public function contact()
    {
        return view('client.pages.auth.contact');
    }
    public function submitRegister(RegisterUser $request)
    {

        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route("auth.login")->with("success", "Registered successfully, please login");
    }
    public function submitLogin(LoginRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            return redirect()->route("home");
        } elseif (Auth::guard('admin')->attempt($data)) {
            return redirect()->route("admin.home");
        } else {
            return back()->withErrors(["email" => "invalid"])->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
}
