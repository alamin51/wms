<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Stuff;
use Illuminate\Http\Request;

class StuffController extends Controller
{
    public function create()
    {
        return view('backend.stuff.create');
    }
    public function table(){

        $stuffs=Stuff::paginate(3);

        return view('backend.stuff.index',compact('stuffs'));
    }

    public function view($id){
        $stuff=Stuff::find($id);
        return view('backend.stuff.view',compact('stuff'));
    }
    public function edit($id){
        $stuff=Stuff::find($id);
        return view('backend.stuff.edit',compact('stuff'));
    }

    public function updateForm($id){
        $stuff=Stuff::find($id);
        return view('backend.create.update',compact('stuff'));
    }

    public function delete($id){
        $stuff=Stuff::find($id)->delete();
        return redirect()->route('stuff.create.table');

    }
    public function update(Request $request,$id){
        $stuff= Stuff::find($id);
        $filename=$stuff->s_image;
        if ($request->hasFile('s_image')){
            $file=$request->file('s_image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }
        $stuff->update([
         's_name'=>$request->s_name,
        's_image'=>$filename,
        's_phone'=>$request->s_phone,
         's_address'=>$request->s_address,
            
        ]);
        notify()->success("Update Successful");
        return redirect()->route('stuff.create.table');
    }
     public function store(Request $request){
        $request->validate([
            's_name'=>'required',
            's_image'=>'required',
            's_phone'=>'required',
            's_address'=>'required',
             
        ]);
      

        $filename=null;
        if ($request->hasFile('s_image')){
            $file=$request->file('s_image');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }
// dd($filename);
        Stuff::create([
            's_name'=>$request->s_name,
            's_image'=>$filename,
            's_phone'=>$request->s_phone,
            's_address'=>$request->s_address,
        ]);
        return redirect()->back();
    }
}
