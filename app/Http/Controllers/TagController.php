<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        $tags = Tag::where('user_id',auth()->id())->paginate(4);
        $trashes = Tag::onlyTrashed()->paginate(4);
        return view('dashboard.tag.index',compact('tags','trashes'));
    }
    function insert(Request $request){
       $request->validate([
        'title'=>'required',
       ]);
       Tag::insert([
        'title'=>$request->title,
         'user_id'=>auth()->id(),
        'created_at'=>now(),
       ]);
       return back();

    }
    function delete(Request $request, $id){
        Tag::findOrFail($id)->delete();
        return back();
    }
    function restore($id){
        Tag::where('id',$id)->restore();
        return back();
    }
}
