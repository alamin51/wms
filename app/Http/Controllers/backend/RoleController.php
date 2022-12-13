<?php

namespace App\Http\Controllers\backend;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function create()
    {
        return view('backend.role.create');
    }
    public function table(){
        $roles=Role::all();
        return view('backend.role.index',compact('roles'));
    }
    public function edit($id){
        $role=Role::find($id);
        return view('backend.role.edit',compact('role'));
    }

    public function updateForm($id){
        $role=Role::find($id);
        return view('backend.create.update',compact('role'));
    }

    public function delete($id){
        $role=Role::find($id)->delete();
        return redirect()->route('role.create.table');

    }
    

    public function update(Request $request,$id){
        $role= Role::find($id);
        $role->update([
            'name'=>$request->name,
            'description'=>$request->description, 
        ]);
        return redirect()->back();
    }
    
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        Role::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->back();
    }
}
