<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontTagBlogsController extends Controller
{

              public function index($id){
            $tag = Tag::with('relationwithblog')->where('id',$id)->get();
            $tag_name = Tag::where('id',$id)->first();
            $related_blogs = Banner::where('feature','active')->latest()->take(2)->get();
            $blogs = $tag[0]->relationwithblog;
            return view('frontend.tagPosts.index',compact('blogs','tag_name','related_blogs'));
           }
           public function single_blog($id){
               $blog = Blog::where('id',$id)->first();
                return view('frontend.tagPosts.singleBlog',compact('blog'));
               }
}
