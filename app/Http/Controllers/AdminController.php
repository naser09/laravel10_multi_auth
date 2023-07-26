<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        $this->authorize('viewUser',auth()->user());
        $user = User::latest()->paginate(10);
        $blogs = Blog::latest()->paginate(20);
        return view('admin.index',['users'=>$user,'blogs'=>$blogs]);
    }
}
