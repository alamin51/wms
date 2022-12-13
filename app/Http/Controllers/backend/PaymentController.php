<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create(){
        return view('backend.payment.create');
    }
    public function table(){
        $payments=Payment::all();
        return view('backend.payment.index',compact('payments'));

    }
    public function store(Request $request){
        $request->validate([
            'payment_date'=>'required',
            'amount'=>'required',
            
        ]);

        Payment::create([
            'payment_date'=>$request->payment_date,
            'amount'=>$request->amount,
            

        ]);
        return redirect()->back();
    }
}
