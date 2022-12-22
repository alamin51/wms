@extends('backend.master')

@section('content')


<h1>Package List</h1>
<a class="btn btn-primary" href="{{route('package.create')}}">Create package +</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">service_id</th>
      <th scope="col">price</th>
      <th scope="col">slug</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($packages as $data)
  <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->service_id}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->slug}}</td>
      <td>
      <img src="{{url('/upload/'.$data->image)}}" width="40" height="40" alt="package image">
      </td>
    <td>
    
      <a href="{{route('package.create.edit',$data->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
      <a href="{{route('package.create.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
    </td>
    </tr>
    @endforeach

    
  </tbody>
</table>
{{$packages->links()}}

@endsection