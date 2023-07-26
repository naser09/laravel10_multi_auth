<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct() {
        $this->middleware('auth')->except('index');
    }
    function index(){
        $blogs = Blog::latest()->paginate(20);
        return view('blog.index',['blogs'=>$blogs]);
    }
    function store(Request $request){
        if($request->id != null){
            $blog = Blog::find($request->id);
            return $this->edit($request,$blog);
        };
        auth()->user()->blogs()->create([
            'title'=>$request->title,
            'blog'=>$request->blog
        ]);
        // Blog::create([
        //     'title'=>$request->title,
        //     'blog'=>$request->blog
        // ]);
        return back();
    }
    function destroy(Request $request,Blog $blog){
        $blog->delete();
        return back();
    }
    function get_edit(Request $request , Blog $blog) {
        return back()->with([
            'title'=>$blog->title,
            'blog'=>$blog->blog,
            'id'=>$blog->id
        ]);
    }

    function edit(Request $request , Blog $blog) {
        $blog->title = $request->title;
        $blog->blog = $request->blog;
        $blog->save();
        return back();
    }
}
