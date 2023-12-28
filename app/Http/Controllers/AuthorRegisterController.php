<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthorRegisterController extends Controller
{
    public function registration(){
        return view('frontend.author.sign_up');
    }
    public function not_found(){
        return view('frontend.author.not_found');
    }
    public function register(Request $request){

        User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>"author",
            'approve_status'=>0,
            'created_at'=>now(),
        ]);
        return redirect()->route('root.author.registration')->with('author_register','registration complete') ->with('s_email',$request->email)->with('s_password',$request->password);
    }
    public function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'approve_status' => 1])) {
            return redirect()->route('home');
        }else{
            return view('frontend.author.not_found');
        }
    }
}

// ->route('author.login')

// ->with('s_email',$request->email)->with('s_password',$request->password)
