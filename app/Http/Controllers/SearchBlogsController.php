<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use Illuminate\Http\Request;

class SearchBlogsController extends Controller
{

        public function index(Request $request){
            $user_search = $request->search_value;
            $related_blogs = Banner::where('feature','active')->latest()->take(2)->get();
            $blogs = Blog::where('title','like',"%$user_search%")->orWhere('description','like',"%$user_search%")->get();
            return view('frontend.categoryPosts.index',compact('blogs','user_search','related_blogs'));
        }
    }


