@extends('backend.master')

@section('content')


<h1>User List</h1>
<a class="btn btn-primary" href="{{route('user.create')}}">Create User +</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">role_id</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">picure</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $data)
  <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->role}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->address}}</td>
      <td>
      <img src="{{url('/upload/'.$data->picture)}}" width="40" height="40" alt="package image">
      </td>
    <td>
    
      <a href="{{route('user.create.edit',$data->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
      <a href="{{route('user.create.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
    </td>
    </tr>
    @endforeach

    
  </tbody>
</table>

@endsection