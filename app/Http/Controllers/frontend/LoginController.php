<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        return view('frontend.pages.auth.login');
    }
    public function dologin(Request $request){
        $variable=$request->only('email',"password");
        
        if(Auth::attempt($variable)){
            return redirect()->route('home');
        }
        else
        return redirect()->back();
    }
    public function registration(){
        return view('frontend.pages.auth.registration');
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
    
    
    public function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
            'picture'=>'required',
        ]);

             //for File uploading
             $filename=null;
             if ($request->hasFile('picture')){
                 $file=$request->file('picture');
                 $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
                 $file->storeAs('/upload',$filename);
             }  

         User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'picture'=>$filename,


        ]);
        return redirect()->route('login');
    }
}
