<?php

use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\StuffController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\ContactController as FrontendContactController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(["middleware"=>["auth","checkAdmin"],"prefix"=>"admin"], function(){
    
route::get('/',[DashboardController::class,'dashboard'])->name('admin');

Route::get('admin-profile',[UserController::class,'profile'])->name('backend.user.profile');


//For Backend
//Role
// route::get('/create',[RoleController::class,'create'])->name('role.create');
// route::get('/create/table',[RoleController::class,'table'])->name('role.create.table');
// route::post('/create/table/post',[RoleController::class,'store'])->name('role.create.table.store');
// route::get('/role-edit/{id}',[RoleController::class,'edit'])->name('role.create.edit');
// route::get('/role-update/{id}',[RoleController::class,'updateForm'])->name('role.create.update');
// route::put('/role-submit/{id}',[RoleController::class,'update'])->name('role.create.do.update');
// route::get('/role-delete/{id}',[RoleController::class,'delete'])->name('role.create.delete');



//for Event
route::get('/create/event',[EventController::class,'create'])->name('event.create');
route::get('/event-create/table',[EventController::class,'table'])->name('event.create.table');
route::post('/event-create/table/post',[EventController::class,'store'])->name('event.create.table.store');
route::get('/event-view/{id}',[EventController::class,'view'])->name('event.create.view');
route::get('/event-edit/{id}',[EventController::class,'edit'])->name('event.create.edit');
route::get('/event-update/{id}',[EventController::class,'updateForm'])->name('event.create.update');
route::put('/event-submit/{id}',[EventController::class,'update'])->name('event.create.do.update');
route::get('/event-delete/{id}',[EventController::class,'delete'])->name('event.create.delete');


//for Booking
route::get('/create/booking',[BookingController::class,'create'])->name('booking.create');
route::get('/booking-create/table',[BookingController::class,'table'])->name('booking.create.table');
route::post('/booking-create/table/post',[BookingController::class,'store'])->name('booking.create.table.store');
route::get('/booking-edit/{id}',[BookingController::class,'edit'])->name('booking.create.edit');
route::get('/booking-update/{id}',[BookingController::class,'updateForm'])->name('booking.create.update');
route::put('/booking-edit/{id}',[BookingController::class,'update'])->name('booking.create.do.update');
route::get('/booking-delete/{id}',[BookingController::class,'delete'])->name('booking.create.delete');
route::get('/booking-approve/{id}',[BookingController::class,'approve'])->name('booking.approve');
route::get('/booking-reject/{id}',[BookingController::class,'reject'])->name('booking.reject');


//for Stuff
route::get('/create/stuff',[StuffController::class,'create'])->name('stuff.create');
route::get('/stuff-create/table',[StuffController::class,'table'])->name('stuff.create.table');
route::post('/stuff-create/table/post',[StuffController::class,'store'])->name('stuff.create.table.store');
route::get('/stuff-edit/{id}',[StuffController::class,'edit'])->name('stuff.create.edit');
route::get('/stuff-update/{id}',[StuffController::class,'updateForm'])->name('stuff.create.update');
route::put('/stuff-submit/{id}',[StuffController::class,'update'])->name('stuff.create.do.update');
route::get('/stuff-delete/{id}',[StuffController::class,'delete'])->name('stuff.create.delete');


//for Payment
route::get('/create/payment',[PaymentController::class,'create'])->name('payment.create');
route::get('/payment-create/table',[PaymentController::class,'table'])->name('payment.create.table');
route::post('/payment-create/table/post',[PaymentController::class,'store'])->name('payment.create.table.store');


//for Package
route::get('/create/package',[PackageController::class,'create'])->name('package.create');
route::get('/package-create/table',[PackageController::class,'table'])->name('package.create.table');
route::post('/package-create/table/post',[PackageController::class,'store'])->name('package.create.table.store');
route::get('/package-edit{id}',[PackageController::class,'edit'])->name('package.create.edit');
route::post('/package-update{id}',[PackageController::class,'updateForm'])->name('package.create.update');
route::put('/package-create/edit/{id}',[PackageController::class,'update'])->name('package.create.do.update');
route::get('/package-delete/{id}',[PackageController::class,'delete'])->name('package.create.delete');




// Services Dropdown
//Food
// Route::get("/food/list",[ServiceController::class,'foodList'])->name("service.food.list");
// Route::get("/food/create",[ServiceController::class,'foodCreate'])->name("service.food.create");
// Route::post("/food/store",[ServiceController::class,'foodStore'])->name("service.food.store");

// //Decoration Dropdown
// Route::get("/decoration/list",[ServiceController::class,'decorationList'])->name("service.decoration.list");
// Route::get("/decoration/create",[ServiceController::class,'decorationCreate'])->name("service.decoration.create");
// Route::post("/decoration/store",[ServiceController::class,'decorationStore'])->name("service.decoration.store");

// //Photography
// Route::get("/photography/list",[ServiceController::class,'photographyList'])->name("service.photography.list");
// Route::get("/photography/create",[ServiceController::class,'photographyCreate'])->name("service.photography.create");
// Route::post("/photography/store",[ServiceController::class,'photographyStore'])->name("service.photography.store");

// for Service
route::get('/create/service',[ServiceController::class,'create'])->name('service.create');
route::get('/create/service/table',[ServiceController::class,'table'])->name('service.create.table');
route::post('/create/service/table/post',[ServiceController::class,'store'])->name('service.create.table.store');
//route::get('/service-view/{id}',[ServiceController::class,'view'])->name('service.create.view');
route::get('/service-edit/{id}',[ServiceController::class,'edit'])->name('service.create.edit');
route::get('/service-update/{id}',[ServiceController::class,'updateForm'])->name('service.create.update');
route::put('/service-submit/{id}',[ServiceController::class,'update'])->name('service.create.do.update');
route::get('/service-delete/{id}',[ServiceController::class,'delete'])->name('service.create.delete');


//for USER
route::get('/create/user',[UserController::class,'create'])->name('user.create');
route::get('/user-create/table',[UserController::class,'table'])->name('user.create.table');
route::post('/user-create/table/post',[UserController::class,'store'])->name('user.create.table.store');
route::get('/user-edit{id}',[UserController::class,'edit'])->name('user.create.edit');
route::post('/user-update{id}',[UserController::class,'updateForm'])->name('user.create.update');
route::put('/user-submit/{id}',[UserController::class,'update'])->name('user.create.do.update');
route::get('/user-delete/{id}',[UserController::class,'delete'])->name('user.create.delete');

    
});

//for FRONTEND Start

Route::get('/',[WebController::class,'index'])->name('home');
route::get('/book-a-package/{id}',[WebController::class,'book'])->name('frontend.booking.form')->middleware(["auth"]);
route::post('/book-a-package-submit/{id}',[WebController::class,'submit'])->name('frontend.booking.submit')->middleware(["auth"]);
route::get('/delete-booking/{id}',[WebController::class,'deleteBooking'])->name('frontend.booking.delete');
route::get('/search',[WebController::class,'search'])->name('search');

//for LOGIN USer
route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/dologin',[LoginController::class,'dologin'])->name('admin.dologin');
route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');

//for Admin Login
//route::get('/admin-login',[LoginController::class,'adminlogin'])->name('admin.login');

//for registration user
route::get('/registration',[LoginController::class,'registration'])->name('user.registration');
route::post('/do-registration',[LoginController::class,'store'])->name('user.do.registration');

//User profile information
Route::get('/profile',[WebController::class,'profile'])->name('user.profile');
Route::get('/booking-cancel/{id}',[WebController::class,'status'])->name('booking.status');
Route::get('/profile-view/{id}',[WebController::class,'bookingDetails'])->name('user.bookingDetails');
Route::get('/profile-edit/{id}',[WebController::class,'edit'])->name('user.profile.edit');
Route::put('/profile-update/{id}',[WebController::class,'updateProfile'])->name('profile.update');

//Frontend Service
Route::get('/book-a-service',[WebController::class,'bookservice'])->name('frontend.service');
Route::get('/book-a-package',[WebController::class,'bookpackage'])->name('frontend.package');

Route::get('/view-service/{id}',[WebController::class,'viewservice'])->name('frontend.service.view');


//for Report
route::get('/create-report',[ReportController::class,'report'])->name('report.create');
route::get('/generated-report',[ReportController::class,'generateReport'])->name('report.generate');

//Contact Us
route::get('/contactus',[ContactController::class,'contactus'])->name('contactus');
route::post('/contactus-message',[ContactController::class,'store'])->name('contactus.message');
route::get('/message',[ContactController::class,'message'])->name('message');
route::get('/message/delete/{id}',[ContactController::class,'delete'])->name('message.delete');