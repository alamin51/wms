<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Package;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(){
        $packages = Package::all();
        return view('backend.event.create',compact("packages"));
    }
    public function table(){
        $events=Event::all();
        return view('backend.event.index',compact('events'));
    }

    public function view($id){
        $events=Event::find($id);
        return view('backend.event.view',compact('events'));
    }
    public function edit($id){
        $event=Event::find($id);
        return view('backend.event.edit',compact('event'));
    }

    public function updateForm($id){
        $event=Event::find($id);
        return view('backend.create.update',compact('event'));
    }

    public function delete($id){
        $event=Event::find($id)->delete();
        return redirect()->route('event.create.table');

    }
    

    public function update(Request $request,$id){
        $event= Event::find($id);
        $event->update([
            'event_name'=>$request->event_name,
            'picture'=>$request->picture,
            'description'=>$request->description,
            'price'=>$request->price,
            
        ]);
        return redirect()->back();
    }
    
    public function store(Request $request){
    
        $request->validate([
            'event_name'=>'required',
            'picture'=>'required',
            'description'=>'required',
            'price'=>'required'
            
        ]);
        
        $filename=null;
        if ($request->hasFile('picture')){
            $file=$request->file('picture');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }

        Event::create([
            'event_name'=>$request->event_name,
            'picture'=>$filename,
            'description'=>$request->description,
            'price'=>$request->price,
            'picture'=>$filename,
            "package_id"=>$request->package_name
        ]);

        return redirect()->back();
    }
}
