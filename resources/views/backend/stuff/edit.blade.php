<!-- @extends('backend.master')

@section('content')



<form action="{{route('stuff.create.do.update',$stuff->id)}}" method="POST" enctype="multipart/form-data">

    @method('PUT')
    
    @csrf 

  <div class="form-group">
    <label for="s_name">Stuff Name</label>
    <input type="text" name="s_name" class="form-control" id="s_name" placeholder="Enter your name"value="{{$stuff->s_name}}" name="s_name">
  </div> 

  <div class="form-group">
    <label for="s_image">Stuff Image</label>
    <input type="file" name="s_image" class="form-control" id="s_image" placeholder="Enter your file"value="{{$stuff->s_image}}" name="s_image">
  </div> 

  <div class="form-group">
    <label for="s_phone">Stuff Phone</label>
    <input type="text" name="s_phone" class="form-control" id="s_phone" placeholder="Enter your phone"value="{{$stuff->s_phone}}" name="s_phone">
  </div> 

  <div class="form-group">
    <label for="s_address">Stuff Address</label>
    <input type="text" name="s_address" class="form-control" id="s_address" placeholder="Enter your address"value="{{$stuff->s_addrss}}" name="s_address">
  </div> 



  <button type="submit" class="btn btn-success">Update</button>
 
 
  <!-- <div class="form-group">
    <label for="description">Description</label>
    <input class="text" name="description" class="form-control" id="description" placeholder="Enter your Description">
  </div> -->
</form>

@endsection -->