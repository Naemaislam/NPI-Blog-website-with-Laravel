<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\c;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function contact(){
    $categories =Category::all();
    return view('frontend.contact.index',compact('categories'));
  }
  public function contact_post(Request $request){
    $request->validate([
        'g-recaptcha-response' => 'required|captcha',
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ]);
    Contact::insert([
        'user_id' => auth()->id(),
          'name' => $request->name,
          'email' => $request->email,
          'subject' => $request->subject,
          'message' => $request->message,
          'created_at' =>now(),
          ]);
          $image = base_path('public/uploads/profiel/default.jpg');
          Mail::to($request->email)->send(new ContactMail($request->except('_token'),$image));
          return back();
  }
}
