<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function insert(Request $request){
        Comment::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'post_id'=>$request->post_id,
            'user_id'=>$request->user_id,
            'parent_id'=>$request->parent_id,
            'created_at'=>now(),
        ]);
        return back();
    }
}
