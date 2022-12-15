@extends('backend.master')

@section('content')


<h1>Service List</h1>
<a class="btn btn-success" href="{{route('service.create')}}">Create Service +</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">service_name</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($services as $data)
  <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->service_name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->status}}</td>
      <td>
    
      <a href="{{route('service.create.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="{{route('service.create.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
     
    </tr>
    @endforeach

    
  </tbody>
</table>

@endsection