<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Egulias\EmailValidator\Parser\Comment as ParserComment;
use Illuminate\Http\Request;

class FrontCategoryBlogController extends Controller
{
    public function index($id){
        $blogs =Blog::where('category_id',$id)->get();
        $related_blogs = Banner::where('feature','active')->latest()->take(2)->get();
        $categories =Category::where('id',$id)->first();
        return view('frontend.categoryPosts.index',compact('blogs','categories','related_blogs'));
       }
       public function single_blog($id){
        $related_blogs = Banner::where('feature','active')->latest()->take(2)->get();

        $blog =Blog::where('id',$id)->first();

        if($blog){
            Blog::find($id)->update([
            'visitor_count'=> $blog->visitor_count +1,
            ]);

        }
        $comments = Comment::with('relationwithreply')->where('post_id',$id)->whereNull('parent_id')->get();

        return view('frontend.categoryPosts.singleBlog',compact('blog','related_blogs','comments'));
       }

}
