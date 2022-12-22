<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Event;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookingDetail;

class WebController extends Controller
{
    public function index(){

        $packages = Package::all();
        return view('frontend.pages.home',compact("packages"));
        
    }
    public function book($id){
        $package = Package::find($id);
        
        $packages = Package::all();
        $services = Service::all();
        return view('frontend.pages.form',compact('package','packages','services'));
    }



    public function submit(Request $request,$id){
  
        if(auth()->user()){
      
// dd($request->all());
        $request->validate([
            "from_date"=> "date|after_or_equal:now",
            "to_date" => "date|after:from_date"
        ]);
        $booking=Booking::create([
            'user_id'=>auth()->user()->id,
            'package_id'=>$id,
            'address'=>$request->address,
            'guest'=>$request->guest,
            'venue'=>$request->venue,
            'food_item'=>$request->food_item,
            'booking_from'=>$request->from_date,
            'booking_to'=>$request->to_date
        ]);


        if($request->multipleServices){
            foreach($request->multipleServices as $service){
                // dd($service);
                $serviceprice = Service::where('id',$service)->pluck('price');
                // dd($serviceprice);
                // dd($serviceprice[0]);
                BookingDetail::create([
                    'booking_id'=>$booking->id,
                    'package_id'=>$id,
                    'package_price'=>$serviceprice[0],
                ]);
            }
        }
        
        }
        return to_route('home');
    }
    public function deleteBooking($id){
        Booking::find($id)->delete();
        return redirect()->back();
    }
    public function profile()
    {
        $bookings = Booking::where("user_id", auth()->user()->id)->with('bookingDetails')->get();

        return view('frontend.pages.auth.userprofile',compact("bookings"));
    }
     public function edit($id){
     $user=User::find($id);
     return view('frontend.pages.auth.editprofile',compact('user'));
     }

     public function updateprofile(Request $req,$id){
        // dd($req->all());

        $user=user::find($id);

        $user->update([
            "name" => $req->name,
            "phone" => $req->phone,
            "email" => $req->email,
            "address" => $req->address,
        ]);

        return redirect()->route("user.profile");
     }


    public function userprofile(Request $request)
    {
       //validation

        $user=User::find(auth()->user()->id);
        $user->update([
           'name'=>$request->user_name,
           'address'=>$request->user_address,
           'mobile'=>$request->user_mobile,
        ]);

        return redirect()->back();
    }

    public function search(Request $request){
        $servicesearch=Package::where('name','like','%'.$request->event.'%')->get();

        return view('frontend.pages.search', compact('servicesearch'));
    }
    public function bookingDetails($id){
        $booking = Booking::find($id);
        $bookingDetails = BookingDetail::where('booking_id',$booking->id)->get();
        return view('frontend.pages.auth.bookingDetails',compact('bookingDetails'));
    }
    public function bookservice(){
        $servicebook= Service::all();
        return view('frontend.pages.auth.service',compact('servicebook'));
    }
    public function bookpackage(){
        $packages= Package::all();
        return view('frontend.pages.auth.packagebook',compact('packages'));
    }

    public function viewservice($id){
        $services=Service::find($id);
        return view('frontend.pages.auth.viewService',compact('services'));
    }

    public function status($id){
        $booking=Booking::find($id);
        if($booking->status!='approved'){
            $booking->update([
                'status'=>'cancel'
            ]);
        }
        else{
            notify()->error('You can not cancel it now');
            return redirect()->back();
        }
        return redirect()->back();
    }


}