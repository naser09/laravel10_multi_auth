<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function index() {
        return view('register.index');
    }
    function store(Request $request) {
        $this->validate($request,[
            'name' => 'required|max:250',
            'email' => 'required|email',
            'username' => 'required|max:255',
            'password'=>'required|confirmed'
        ]);
        try {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'username'=>$request->username
            ]);
        } catch (\Throwable $th) {
            return back()->with('status','Incorrect credentials !! ');
        }

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
        return back()->with('status','User Registration failed');
    }
}
