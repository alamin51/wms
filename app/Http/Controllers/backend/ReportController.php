<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request){
        if($request->booking_from && $request->booking_to){
            $startDate = Carbon::createFromFormat('Y-m-d',$request->booking_from);
            $endDate = Carbon::createFromFormat('Y-m-d',$request->booking_to);
            
            $searchResult = Booking::whereBetween('booking_from',[$startDate,$endDate])->get();
        }else{
            $searchResult = Booking::get();
        }
        return view('backend.report.create',compact('searchResult'));
    }
    public function generateReport(Request $request){
        $startDate = Carbon::createFromFormat('Y-m-d',$request->booking_from);
        $endDate = Carbon::createFromFormat('Y-m-d',$request->booking_to);
        
        $searchResult = Booking::whereBetween('booking_from',[$startDate,$endDate])->get();
        // dd($searchResult);
        return to_route('report.create',compact('searchResult'));
    }

    public function contact(){
        return view('frontend.pages.auth.contact');
    }

}
