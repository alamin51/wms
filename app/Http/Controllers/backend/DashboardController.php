<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Stuff;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $stuffs = Stuff::all();
        $bookings = Booking::all();
        return view("backend.home.dashboard",compact("stuffs","bookings"));
    }
}
