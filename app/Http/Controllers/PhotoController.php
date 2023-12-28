<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $categories =Category::all();
        $blogs =Blog::all();
        // $blog =Category::where('id','$id')->first();
        // $photos =Category::where('id','$id')->first();
        return view('frontend.photo.index',compact('categories','blogs'));
    }
}
