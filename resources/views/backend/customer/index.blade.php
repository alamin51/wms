<!-- @extends('backend.master')

@section('content')


<h1>Customer List</h1>
<a class="btn btn-success" href="{{route('customer.create')}}">Create Customer List</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">password</th>
      <th scope="col">picture</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>
    @foreach($customers as $data)
  <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->password}}</td>
      <td>
      <img src="{{url('/upload/'.$data->picture)}}" width="40" height="40" alt="Customer picture">
      </td>
      <td>
      <a href="{{route('customer.create.view',$data->id)}}"><button type="button" class="btn btn-warning">View</button></a>
      <a href="{{route('customer.create.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="{{route('customer.create.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>

    </tr>
    @endforeach

    
  </tbody>
</table>

@endsection -->