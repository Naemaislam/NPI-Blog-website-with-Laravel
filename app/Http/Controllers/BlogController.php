<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index(){
        $admin_blogs = Blog::all();
        $blogs = Blog::where('user_id',auth()->id())->get();
        return view('dashboard.blog.index',compact('blogs','admin_blogs'));
    }
    public function create_view(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('dashboard.blog.create',compact('categories','tags'));
    }
    public function create(Request $request){
        if($request->hasFile('image')){

         $new_name = auth()->id().'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();
        $img = Image::make($request->file('image'))->resize(300, 200);
        $img->save(base_path('public/uploads/blog/'.$new_name), 80);

       $blog = Blog::create([
            'user_id' =>auth()->id(),
            'category_id'=>$request->category_id,
            'title' =>$request->title,
            'description' =>$request->description,
            'date' =>$request->date,
            'image' =>$new_name,
            'created_at'=>now(),

        ]);
        $blog->RelationwithTags()->attach($request->tag_id);

        $blog->save();
        return redirect()->route('blog');
        }

    }

    public function edit_show($id){
        $blog = Blog::where('id',$id)->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view('dashboard.blog.edit',[
            'categories' => $categories,
            'tags' => $tags,
            'blog'=> $blog,
        ]);
    }
    public function edit(Request $request, $id){
        if($request->hasFile('image')){
            $blog = Blog::where('id')->first();

// laravel project e id er por $id bad dite hbe

            unlink(public_path('uploads/blog/'.$blog->image));

            $new_name = $id.'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();
           $img = Image::make($request->file('image'))->resize(300, 200);
           $img->save(base_path('public/uploads/blog/'.$new_name), 80);

        $blog = Blog::find($id);
        $blog->RelationwithTags()->sync($request->tag_id);
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        $blog->date = $request->date;
        $blog->user_id = Auth::user()->id;

// laravel project e Auth::user()->id dite hbe


        $blog->image = $new_name;
        $blog->updated_at = now();
        $blog->save();
        return back();
        }else{
            $blog = Blog::find($id);
            $blog->RelationwithTags()->sync($request->tag_id);
            $blog->title = $request->title;
            $blog->category_id = $request->category_id;
            $blog->description = $request->description;
            $blog->date = $request->date;
            $blog->user_id = Auth::user()->id;
            // laravel project e Auth::user()->id dite hbe
            $blog->updated_at = now();
            $blog->save();
           return back();

        }

    }
    public function feature($id){
       $blog = Blog::where('id',$id)->first();
       if($blog->feature == 'active'){
        Blog::find($id)->update([
        'feature'=>'deactive',
        'updated_at'=>now(),
            ]);
            return back();
       }else{
         Blog::find($id)->update([
         'feature'=>'active',
         'updated_at'=>now(),
             ]);
             return back();
       }
    }
}


