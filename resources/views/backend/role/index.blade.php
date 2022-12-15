@extends('backend.master')

@section('content')



<h1>Role List</h1>
<a class="btn btn-success" href="{{route('role.create')}}">Create Role +</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($roles as $data)
    <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->Description}}</td>
      <td>{{$data->status}}</td>
      <td>
      <a href="{{route('role.create.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="{{route('role.create.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection