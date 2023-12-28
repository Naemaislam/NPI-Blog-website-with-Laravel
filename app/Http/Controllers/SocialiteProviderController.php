<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialiteProviderController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider){

        $user = Socialite::driver($provider)->user();
        $old_user = User::where('email',$user->email)->first();

        if($old_user ){
            Auth::login($old_user);
            return redirect()->route('home');
        }else{
            $getUsers = User::create([
                'name' =>  $user->name,
                'email' => $user->email,
                'image' =>  $user->avatar,
                'password' =>  encrypt('the_global_password.@345'),
                'role' => 'author',
                'attempt_role' => 'third_party',
                'approve_status' =>true,
                'email_verified_at' => now(),
                'created_at' =>now(),
              ]);
              Auth::login($getUsers);
              return redirect()->route('home');
        }



    }
}
