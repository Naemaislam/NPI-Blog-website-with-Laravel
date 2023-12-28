<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $modarate_users = User::where('role','modarator')->get();
        $specific_users = User::where('role','modarator')
        ->orwhere('role','author')
        ->orwhere('role','member')
        ->orwhere('role','visitor')
        ->get();

        return view('dashboard.rolemanagement.index',[
            'modarate_users' => $modarate_users,
            'specific_users' => $specific_users,

        ]);
    }
    public function role_assign(Request $request){

        $request->validate([
            'name' => "required|alpha",
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|confirmed',
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'modarator',
            'created_at' => now(),
        ]);

        return back()->with('new_modarator' , "Dear $request->name sir, Promoted by Modarator");
    }

public function role_all_assign(Request $request){
   $one= User::where('id',$request->user_id)->first();
    User::find($request->user_id)->update([
   'role' => $request->role_name,
   'updated_at'=>now(),
    ]);
    return back()->with('new_modarator' , "Dear $one->name sir, Promoted by  $request->role_name ");
}


}
