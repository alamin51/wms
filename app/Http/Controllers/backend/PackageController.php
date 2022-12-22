<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function create(){
        return view('backend.package.create');
    }
    public function table(){
        $packages=Package::paginate(3);
        return view('backend.package.index',compact('packages'));
    }
    public function edit($id){
        $package=Package::find($id);
        return view('backend.package.edit',compact('package'));
    }

    public function updateForm($id){
        $package=Package::find($id);
        return view('backend.package.edit',compact('package'));
    }
    
    public function delete($id){
        $package=Package::find($id)->delete();
        return redirect()->route('package.create.table');

    }
    
    public function update(Request $request,$id){
        $package=Package::find($id);
        $package->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'service_id'=>$request->service_id,
            'price'=>$request->price,
            'image'=>$package->image,
         
            
        ]);
        return redirect()->back();
    }

    
    public function store(Request $request){

        
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'service_id'=>'required',
            'price'=>'required',
            'slug'=>'required',
            'image'=>'required'
        ]);

        $filename=null;
        if ($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }

        Package::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'service_id'=>$request->service_id,
            'price'=>$request->price,
            'slug'=>$request->slug,
            'image'=>$filename,
        ]);
        return redirect()->back();
    }
}
