<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingDetail extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function packageRelation(){
        return $this->belongsTo(Package::class,'package_id','id');
    }
    public function bookingRelation(){
    return $this->belongsTo(Booking::class,'booking_id','id');  
    }
}