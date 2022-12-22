<?php

namespace App\Http\Controllers\frontend;

use notify;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        return view('frontend.pages.auth.login');
    }
    public function dologin(Request $request){
        $variable=$request->only('email',"password");
        
        if(Auth::attempt($variable)){
            notify()->success("Login Success");
            if(auth()->user()->role=='admin'){
                
                return redirect()->route('admin');
            }
            return redirect()->route('home');
        }
        else{
            notify()->error("Login Failed");
            return redirect()->back();
        }
    }
    public function registration(){
        return view('frontend.pages.auth.registration');
    }

    public function logout(){
        Auth::logout();

        notify()->success('Logout Successfully.');

        return redirect()->route('home');
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
        notify()->success('Registration Successfully.');
        return redirect()->route('login');
    }
}
