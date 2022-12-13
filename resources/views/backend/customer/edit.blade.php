<!-- @extends('backend.master')

@section('content')



<form action="{{route('customer.create.do.update',$customer->id)}}" method="POST" enctype="multipart/form-data">

@method('PUT')

@csrf

<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{$customer->name}}" name="name">
</div> 

<div class="form-group">
  <label for="phone">Phone</label>
  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone"value="{{$customer->phone}}" name="phone">
</div>

<div class="form-group">
  <label for="email">Email</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"value="{{$customer->email}}" name="email">
</div>

<div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address"value="{{$customer->address}}" name="address">
</div>

<div class="form-group">
  <label for="password">Password</label>
  <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password"value="{{$customer->password}}" name="password">
</div>

<div class="form-group">
  <label for="picture">Picture</label>
  <input type="file" name="picture" class="form-control" id="picture" placeholder="Enter your file"value="{{$customer->picture}}" name="picture">
</div>


<button type="submit" class="btn btn-primary">Update</button>


<!-- <div class="form-group">
  <label for="description">Description</label>
  <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
</div> -->
</form>

@endsection -->