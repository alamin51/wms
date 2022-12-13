@extends('backend.master')

@section('content')


<h1>Create User Form</h1>
<form action="{{route('user.create.table.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<div class="form-group">
  <label for="name">User Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
</div> 

<div class="form-group">
  <label for="phone">Phone</label>
  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone">
</div> 

<div class="form-group">
  <label for="email">Email</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
</div>

<div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
</div>

<div class="form-group">
  <label for="password">Password</label>
  <input type="text" name="password" class="form-control" id="password" placeholder="Enter your password">
</div>

<div class="form-group">
  <label for="picture">Picture</label>
  <input type="file" name="picture" class="form-control" id="picture" placeholder="No file Choosen">
</div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection