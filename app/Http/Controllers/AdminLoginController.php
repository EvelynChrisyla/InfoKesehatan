<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // public function showLoginForm()
    // {
    //     return view('login');
    // }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials)) {
            
    //         return redirect()->intended(route('admin.cidera'));
    //     }

    
    //     return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    // }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('adminhomepage'));
        }
    
        return redirect()->route('admin.login')->withErrors(['error' => 'Invalid credentials']);
    }

}
