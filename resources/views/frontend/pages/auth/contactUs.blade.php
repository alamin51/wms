@extends('frontend.master')
@section('content')
<div class="section" style="padding-top:9rem !important">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info">
          <div class="address mt-2">
            <i class="icon-room"></i>
            <h4 class="mb-2">Location:</h4>
            <p>
              Rd#14, House#7,Mirpur Dhaka<br />
              Dhaka-1216
            </p>
          </div>

          <div class="open-hours mt-4">
            <i class="icon-clock-o"></i>
            <h4 class="mb-2">Open Hours:</h4>
            <p>
              Sunday-Thursday:<br />
              9:00 AM - 08:00 PM
            </p>
          </div>

          <div class="email mt-4">
            <i class="icon-envelope"></i>
            <h4 class="mb-2">Email:</h4>
            <p>alamin@gmail.com</p>
          </div>

          <div class="phone mt-4">
            <i class="icon-phone"></i>
            <h4 class="mb-2">Call:</h4>
            <p>+8801703574951</p>
            <p>+8801960648857</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <form action="{{route('contactus.message')}}" method="post">
          @csrf
          <h3>Write your massage here</h3>
          <div class="row">
            <div class="col-12 my-3">
              <input type="text" class="form-control" name="name" placeholder="Name" value="{{auth()?->user()?->name}}" required/>
            </div>
            <div class="col-12 my-3">
              <input type="text" class="form-control" name="email" placeholder="Email" value="{{auth()?->user()?->email}}" required />
            </div>
            <div class="col-12 mb-3">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required/>
            </div>
            <div class="col-12 mb-3">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>

            <div class="col-12">
              <input type="submit" value="Send Message" class="btn btn-primary" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection