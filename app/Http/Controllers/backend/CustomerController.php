<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function create(){
        return view('backend.customer.create');
    }
    public function table(){
        $customers=Customer::all();
        return view('backend.customer.index',compact('customers'));
    }

    public function view($id){
        $customers=Customer::find($id);
        return view('backend.customer.view',compact('customers'));
    }

    public function edit($id){
        $customer=Customer::find($id);
        return view('backend.customer.edit',compact('customer'));
    }

    public function updateForm($id){
        $customer=Customer::find($id);
        return view('backend.create.update',compact('customer'));
    }

    public function delete($id){
        $customer=Customer::find($id)->delete();
        return redirect()->route('customer.create.table');

    }

    public function update(Request $request,$id){
        $customer= Customer::find($id);
        $customer->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>$request->password,
            
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
        ]);

        //for File uploading
        $filename=null;
        if ($request->hasFile('picture')){
            $file=$request->file('picture');
            $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/upload',$filename);
        }
        
        Customer::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>$request->phone,
            
            'picture'=>$filename,

        ]);
        return redirect()->back();
    }
}
