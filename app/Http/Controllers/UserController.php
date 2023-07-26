<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    function index() {
        User
        if (auth()->check()){
            $user = auth()->user();
            if ($user->role === config('role.ADMIN_ROLE')){
                return redirect()->route('admin.dashboard');
            }elseif ($user->role === config('role.MODERATOR_ROLE')){
                return redirect()->route('moderator.dashboard');
            }else{
                return view('user.index');
            }
        }
        return back();
    }
}
