<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        return view('frontend.login.index');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // 'role'=>'required'
            // 'password' => 'required'
        ]);

        $loginData = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($loginData)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with(['error' => 'Username atau Password Salah']);
        }
    }

    public function getLogout(Request $request){
        Auth::logout();
        session()->flush();
        return redirect()->route('login');    
    }
}
