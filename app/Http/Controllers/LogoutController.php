<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    function logout(Request $request) {
        Auth::logout();
        return redirect()->route('home');
    }
}
