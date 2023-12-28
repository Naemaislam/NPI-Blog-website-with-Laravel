<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nn()
    {
        $author_request = User::where('role','author')->get();
        if(auth()->user()->role == 'admin' || auth()->user()->role == 'author'){
            if(auth()->user()->approve_status == true){
        $author_request = User::where('role','author')->get();
        $author_request = User::where('role','author')->get();
                return view('dashboard.root.home',compact('author_request'));
            }else{
                return view('frontend.author.not_found');
            }
        }
    }
    public function accept($id){
        $author = User::where('id',$id)->first();

        if($author->approve_status == false){

            User::find($id)->update([
                'approve_status' =>true,
                'updated_at' =>now(),
            ]);

        }
        return back();
    }
    public function reject($id){
        User::findOrFail($id)->delete();
        return back();
    }
    public function block($id){
        $author = User::where('id',$id)->first();

        if($author->approve_status == true){

            User::find($id)->update([
                'approve_status' =>false,
                'updated_at' =>now(),
            ]);

        }
        return back();
    }
}
