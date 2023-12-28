<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Fronted;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $feature_blogs = Blog::where('feature','active')->get();
        $popular_blogs = Blog::where('feature','active')->orderBy('visitor_count','desc')->take(4)->get();
        $feature_banners = Banner::where('feature','active')->get();
        $fronteds = User::all();
        $categories = Category::all();
        // $admins = User::where('role','admin')->get();
        return view('frontend.root.index',compact('feature_blogs','categories','feature_banners','popular_blogs','fronteds'));
      }
    //   public function blog($id){
    //     $blog =Blog::where('id',$id)->first();
    //     return view('layouts.master',compact('blog'));
    //   }
}
