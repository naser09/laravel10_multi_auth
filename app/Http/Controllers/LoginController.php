<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index() {
        return view('login.index');
    }
    function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (auth()->attempt($credentials,$request->remember)){
            if (auth()->attempt($request->only('email','password'))){
                $user = auth()->user();
                if ($user->role === config('role.ADMIN_ROLE')){
                    return redirect()->route('admin.dashboard');
                }elseif ($user->role === config('role.MODERATOR_ROLE')){
                    return redirect()->route('moderator.dashboard');
                }else{
                    return redirect()->route('dashboard');
                }
            }
        }
        return back()->with('status',"Login Failed !");
    }
}
