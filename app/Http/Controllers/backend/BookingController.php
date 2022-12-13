<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(){
        return view('backend.booking.create');
    }
    public function table(){
        $bookings=Booking::all();
        return view('backend.booking.index',compact('bookings'));
    }


    public function edit($id){
        $booking=Booking::find($id);
        return view('backend.booking.edit',compact('booking'));
    }

    public function updateForm($id){
        $booking=Booking::find($id);
        return view('backend.booking.edit',compact('booking'));

    }

    public function delete($id){
        $booking=Booking::find($id)->delete();
        return redirect()->route('booking.create.table');

    }
    public function approve($id){
        $booking=Booking::find($id)->update([
            'status'=>'approved'
        ]);
        return redirect()->back();

    }
    public function reject($id){
        $booking=Booking::find($id)->update([
            'status'=>'rejected'
        ]);
        return redirect()->back();
    }


    public function update(Request $request,$id){
        $booking=Booking::find($id);
        $booking->update([
            'user_id'=>$request->user_id,
            'package_id'=>$request->package_id,
            'book_date'=>$request->bookdate,
         
            
        ]);
        return redirect()->back();
    }


    public function store(Request $request){
        $request->validate([
            'user_id'=>'required',
            'package_id'=>'required',
            'booking_from'=>'required',
            'booking_to'=>'required',
 
        ]);

        Booking::create([
            'user_id'=>$request->user_id,
            'package_id'=>$request->package_id,
            'booking_from'=>$request->booking_from,
            'booking_to'=>$request->booking_to,
       
        ]);
        return redirect()->back();
    }
}
