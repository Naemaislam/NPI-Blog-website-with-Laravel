<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class ShopController extends Controller
{

    public function index(){
        $products = Shop::all();
        // $shops = Shop::where('user_id',auth()->id())->get();
        return view('dashboard.shop.index',compact('products'));
    }
    public function create_view(){
        $rates = Shop::all();
        // $tags = Tag::all();
        return view('dashboard.shop.create',compact('rates'));
    }
    public function create(Request $request){
        if($request->hasFile('image')){

         $new_name = auth()->id().'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();
        $img = Image::make($request->file('image'))->resize(300, 200);
        $img->save(base_path('public/uploads/shop/'.$new_name), 80);

       $shop = Shop::create([
            'user_id' =>auth()->id(),
            // 'category_id'=>$request->category_id,
            'title' =>$request->title,
            'price' =>$request->price,
            'rate' =>$request->rate,
            'date' =>$request->date,
            'image' =>$new_name,
            'created_at'=>now(),

        ]);
        // $blog->RelationwithTags()->attach($request->tag_id);

        $shop->save();
        return redirect()->route('shop');
        }

    }

    public function edit_show($id){
        $shops = Shop::where('id',$id)->first();
        // $categories = Category::all();
        // $tags = Tag::all();
        return view('dashboard.shop.edit',[
            // 'categories' => $categories,
            // 'tags' => $tags,
            'shops'=> $shops,
        ]);
    }
    public function edit(Request $request, $id){
        if($request->hasFile('image')){
            $shop = Shop::where('id')->first();

// laravel project e id er por $id bad dite hbe

            unlink(public_path('uploads/shop/'.$shop->image));

            $new_name = $id.'-'.$request->title.'-'.now()->format('M,d-Y').'.'.$request->file('image')->getClientOriginalExtension();
           $img = Image::make($request->file('image'))->resize(300, 200);
           $img->save(base_path('public/uploads/shop/'.$new_name), 80);

        $shop = Shop::find($id);
        // $blog->RelationwithTags()->sync($request->tag_id);
        $shop->title = $request->title;
        // $blog->category_id = $request->category_id;
        $shop->price = $request->price;
        $shop->rate = $request->rate;
        $shop->date = $request->date;
        // $shop->user_id = Auth::user()->id;

// laravel project e Auth::user()->id dite hbe


        $shop->image = $new_name;
        $shop->updated_at = now();
        $shop->save();
        return back();
        }else{
            $shop = Shop::find($id);
            // $shop->RelationwithTags()->sync($request->tag_id);
            $shop->title = $request->title;

            $shop->rate = $request->rate;
            $shop->price = $request->price;
            $shop->date = $request->date;
            // $shop->user_id = Auth::user()->id;
            // laravel project e Auth::user()->id dite hbe
            $shop->updated_at = now();
            $shop->save();
           return back();

        }

    }
    public function feature($id){
        $shop = Shop::where('id',$id)->first();
       if($shop->feature == 'active'){
        Shop::find($id)->update([
        'feature'=>'deactive',
        'updated_at'=>now(),
            ]);
            return back();
       }else{
         Shop::find($id)->update([
         'feature'=>'active',
         'updated_at'=>now(),
             ]);
             return back();
       }
    }
}
