<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(1);
        return view('dashboard.category.index',compact('categories'));
    }
    public function insert(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $new_name = auth()->id().'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();
        $img = Image::make($request->file('image'))->resize(300, 200);
        $img->save(base_path('public/uploads/category/'.$new_name), 80);

        if($request->hasFile('image')){

            if($request->slug){
                Category::insert([
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug),
                    'description' => $request->description,
                    'image' => $new_name,
                    'created_at' => now(),
                ]);
                return back()->with('category_success',"Category Insert Successfully Complete");;
            }else{
                Category::insert([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'description' => $request->description,
                    'image' => $new_name,
                    'created_at' => now(),
                ]);
                return back()->with('category_success',"Category Insert Successfully Complete");;
            }


        }
    }


    public function delete($id){
        Category::findOrFail($id)->delete();
        return back()->with('category_success',"Category ID-$id Delete Successfully Complete");

    }


    public function edit_view($slug){
        $category  = Category::where('slug',$slug)->first();

        return view('dashboard.category.edit',compact('category'));

    }

    public function edit(Request $request,$id){

        $category = Category::where('id',$id)->first();

        if($request->hasFile('image')){

            if($category->image){
                unlink(public_path('uploads/category/'. $category->image));
                $new_name = $id.'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();

                $img = Image::make($request->file('image'))->resize(300, 200);
                $img->save(base_path('public/uploads/category/'.$new_name), 80);

            if($request->slug){
                Category::find($id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug),
                    'description' => $request->description,
                    'image' => $new_name,
                    'created_at' => now(),
                ]);
                return redirect()->route('category')->with('category_success',"Category update Successfully Complete");
            }else{
                Category::find($id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'description' => $request->description,
                    'image' => $new_name,
                    'created_at' => now(),
                ]);
                return redirect()->route('category')->with('category_success',"Category update Successfully Complete");
            }
            }else{
                $new_name = auth()->id().'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();

                $img = Image::make($request->file('image'))->resize(300, 200);
                $img->save(base_path('public/uploads/category/'.$new_name), 80);

            if($request->slug){
                Category::find($id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug),
                    'description' => $request->description,
                    'image' => $new_name,
                    'created_at' => now(),
                ]);
                return redirect()->route('category')->with('category_success',"Category update Successfully Complete");
            }else{
                Category::find($id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'description' => $request->description,
                    'image' => $new_name,
                    'created_at' => now(),
                ]);
                return redirect()->route('category')->with('category_success',"Category update Successfully Complete");
            }
            }

        }else{
            if($request->slug){
                Category::find($id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug),
                    'description' => $request->description,
                    'created_at' => now(),
                ]);
                return redirect()->route('category')->with('category_success',"Category update Successfully Complete");
            }else{
                Category::find($id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'description' => $request->description,
                    'created_at' => now(),
                ]);
                return redirect()->route('category')->with('category_success',"Category update Successfully Complete");
            }
        }

    }

    public function status($id){

        $category = Category::where('id',$id)->first();

        if($category->status == 'active'){
            Category::find($id)->update([
                'status' => 'deactive',
                'created_at' => now(),
            ]);
            return redirect()->route('category')->with('category_success',"Category status update Successfully Complete");
        }else{
            Category::find($id)->update([
                'status' => 'active',
                'created_at' => now(),
            ]);
            return redirect()->route('category')->with('category_success',"Category status update Successfully Complete");
        }

    }

}
