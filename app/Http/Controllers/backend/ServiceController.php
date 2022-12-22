<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        return view('backend.service.create');
    }
    public function table(){
        $services=Service::all();
        return view('backend.service.index',compact('services'));

    }
    public function edit($id){
        $service=Service::find($id);
        return view('backend.service.edit',compact('service'));
    }

    public function updateForm($id){
        $service=Service::find($id);
        return view('backend.create.update',compact('service'));

    }
    

    public function delete($id){
        $service=Service::find($id)->delete();
        return redirect()->route('service.create.table');

    }

    public function update(Request $request,$id){
        $service= Service::find($id);
        $service->update([
            'service_name'=>$request->service_name,
            'description'=>$request->description,
            'price'=>$request->price,
            
        ]);
        return redirect()->back();
    }

    public function store(Request $request){
        $request->validate([
            'service_name'=>'required',
            'description'=>'required',
            'price',
            'image'=>'required',
             
        ]);

        $filename=null;
        if ($request->hasFile('image')){
            $file=$request->file('image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }

        Service::create([
            'service_name'=>$request->service_name,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$filename,
           
        ]);
        return redirect()->back();
        
    }



}
