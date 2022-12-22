@extends('backend.master')

@section('content')


<h1>Event List</h1>
<a class="btn btn-success" href="{{route('event.create')}}">Create Event +</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">event_name</th>
      <th scope="col">picture</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">status</th>
      <th scope="col">action</th>

    
    </tr>
  </thead>
  <tbody>
    @foreach($events as $data)
  <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->event_name}}</td>
      <td>
        <img src="{{url('/upload/'.$data->picture)}}" width="40" height="40" alt="Event picture">
      </td>
      <td>{{$data->description}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->status}}</td>
      <td>
      <a href="{{route('event.create.view',$data->id)}}"><button type="button" class="btn btn-warning">View</button></a>
      <a href="{{route('event.create.edit',$data->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
      <a href="{{route('event.create.delete',$data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
      
      
    </tr>

    @endforeach

    
  </tbody>
</table>
{{$events->links()}}

@endsection