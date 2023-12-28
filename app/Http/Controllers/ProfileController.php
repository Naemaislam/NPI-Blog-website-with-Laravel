<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{
    public function index(){

        return view('dashboard.profile.index');
    }

    public function name_update(Request $request,$id){
        $request->validate([
            'name' => "required",
        ]);

        User::find($id)->update([
            'name' => $request->name,
            'created_at' => now(),
        ]);

        return back();
    }

    public function image_update(Request $request,$id){
        $request->validate([
            'image' => "required|image",
        ]);

        $new_name = auth()->id().'-'.auth()->user()->name.'-'.now()->format('d-M-Y').'.'.$request->file('image')->getClientOriginalExtension();

        $img = Image::make($request->file('image'))->resize(300, 200);

        $img->save(base_path('public/uploads/profile/'.$new_name), 80);

        if($request->hasFile('image')){

            User::find($id)->update([
                'image' => $new_name,
                'created_at' => now(),
            ]);
            return back();
        }
        return back();
    }


    public function password_update(Request $request,$id){
        $request->validate([
            'current_password' => "required",
            'password' => 'required|confirmed|min:8',
        ]);

        if(Hash::check($request->current_password,auth()->user()->password)){

            User::find($id)->update([
                'password' => $request->password,
                'created_at' => now(),
            ]);
            return back();
        }else{
            return back();
        }
    }
}
