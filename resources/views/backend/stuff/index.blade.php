
@extends('backend.master')

@section('content')



<h1>Stuff List</h1>
<a class="btn btn-success" href="{{route('stuff.create')}}">Create Stuff</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">s_name</th>
      <th scope="col">s_image</th>
      <th scope="col">s_phone</th>
      <th scope="col">s_address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($stuffs as $data)
    <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->s_name}}</td>
      <td>
        <img src="{{url('/upload/'.$data->image)}}" width="40" height="40" alt="Event picture">
      </td>
      <td>{{$data->s_phone}}</td>
      <td>{{$data->s_address}}</td>
      <td>
      <a href="{{route('stuff.create.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="{{route('stuff.create.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>

@endsection