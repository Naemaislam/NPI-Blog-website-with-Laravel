<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->get();
 return view('frontend.blogs.index',compact('blogs'));
    }
}
