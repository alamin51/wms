<?php

namespace App\Http\Controllers\backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contactus(){
        return view('frontend.pages.auth.contactUs');
    }
    
    public function store(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            'message'=>'required'
        ]);
        Contact::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'message'=>$request->message 
        ]);
   //     Toastr::success('Thank you for connecting us', 'success');
        return redirect()->back();
    }
    public function message(){
        $message = Contact::all();
        return view("backend.contact.index",compact("message"));
    }
    public function delete($id){
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
