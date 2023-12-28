<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function index(){
        $admin_banners = Banner::all();
        $banners = Banner::where('user_id',auth()->id())->get();
        return view('dashboard.banner.index',compact('banners','admin_banners'));
    }
    public function create_view(){
        $categories = Category::all();
        // $tags = Tag::all();
        return view('dashboard.banner.create',compact('categories'));
    }
    public function create(Request $request){
        if($request->hasFile('image')){

         $new_name = auth()->id().'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();
        $img = Image::make($request->file('image'))->resize(300, 200);
        $img->save(base_path('public/uploads/banner/'.$new_name), 80);

       $banner = Banner::create([
            'user_id' =>auth()->id(),
            'category_id'=>$request->category_id,
            'title' =>$request->title,
            'description' =>$request->description,
            'date' =>$request->date,
            'image' =>$new_name,
            'created_at'=>now(),

        ]);
        // $banner->RelationwithTags()->attach($request->tag_id);

        $banner->save();
        return redirect()->route('banner');
        }

    }

    public function edit_show($id){
        $banner = Banner::where('id',$id)->first();
        $categories = Category::all();
        // $tags = Tag::all();
        return view('dashboard.banner.edit',[
            'categories' => $categories,
            // 'tags' => $tags,
            'banner'=> $banner,
        ]);
    }
    public function edit(Request $request, $id){
        if($request->hasFile('image')){
            $banner = Banner::where('id')->first();

// laravel project e id er por $id bad dite hbe

            unlink(public_path('uploads/banner/'.$banner->image));

            $new_name = $id.'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();
           $img = Image::make($request->file('image'))->resize(300, 200);
           $img->save(base_path('public/uploads/banner/'.$new_name), 80);

        $banner = Banner::find($id);
        // $banner->RelationwithTags()->sync($request->tag_id);
        $banner->title = $request->title;
        $banner->category_id = $request->category_id;
        $banner->description = $request->description;
        $banner->date = $request->date;
        $banner->user_id = Auth::user()->id;

// laravel project e Auth::user()->id dite hbe


        $banner->image = $new_name;
        $banner->updated_at = now();
        $banner->save();
        return back();
        }else{
            $banner = Banner::find($id);
            // $banner->RelationwithTags()->sync($request->tag_id);
            $banner->title = $request->title;
            $banner->category_id = $request->category_id;
            $banner->description = $request->description;
            $banner->date = $request->date;
            $banner->user_id = Auth::user()->id;
            // laravel project e Auth::user()->id dite hbe
            $banner->updated_at = now();
            $banner->save();
           return back();

        }

    }
    public function feature($id){
       $banner = Banner::where('id',$id)->first();
       if($banner->feature == 'active'){
        Banner::find($id)->update([
        'feature'=>'deactive',
        'updated_at'=>now(),
            ]);
            return back();
       }else{
         Banner::find($id)->update([
         'feature'=>'active',
         'updated_at'=>now(),
             ]);
             return back();
       }
    }
}
