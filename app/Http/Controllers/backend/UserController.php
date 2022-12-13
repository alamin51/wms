<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('backend.user.create');
    }
    public function table(){
        $users=User::get();
        return view('backend.user.index',compact('users'));
    }
    public function edit($id){
        $user=User::find($id);
        return view('backend.user.edit',compact('user'));
    }

    public function updateForm($id){
        $user=User::find($id);
        return view('backend.user.edit',compact('user'));
    }
    
    public function delete($id){
        $user=User::find($id)->delete();
        return redirect()->route('user.create.table');

    }
    public function update(Request $request,$id){
        $user=User::find($id);
        $user->update([
            'name'=>$request->name,
            'role'=>'stuff',
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'picture'=>$request->picture,
         
            
        ]);
        return redirect()->back();
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'password'=>'required',
            'picture'=>'required'
        ]);
        $filename=null;
        if ($request->hasFile('picture')){
            $file=$request->file('picture');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }

        User::create([
            'name'=>$request->name,
            'role'=>'stuff',
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'picture'=>$filename,
        ]);
        return redirect()->back();
    }


}
