@extends('welcome')
@section('main')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Trip</h1>

    <a class="btn btn-success" href="{{route('trip.create')}}">Create New Trip</a>

            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bus_name</th>
      <th scope="col">bus_type</th>

      <th scope="col">date</th>
      <th scope="col">route</th>

      <th scope="col">time</th>
      <th scope="col">details</th>


      <th scope="col">image</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($trips as $singleBiscuit)
 
    <tr>
      <th scope="row">{{$singleBiscuit->id}}</th>
      <td>{{$singleBiscuit->Bus->Bus_name}}</td>
      <td>{{$singleBiscuit->bus_type}}</td> 
      <td>{{$singleBiscuit->date}}</td>
      <td>{{$singleBiscuit->route->fromLocation->Location_name}} - {{$singleBiscuit->route->toLocation->Location_name}}</td> 
      <td>{{$singleBiscuit->time->time}}</td>      
      <td>{{$singleBiscuit->details}}</td>
      <td><img width="150"src="{{url('/uploads',$singleBiscuit->image)}}" alt="trip image"></td>
      <td>{{$singleBiscuit->price}}</td>
      <td>{{$singleBiscuit->action}}
          <a class="btn btn-primary" href="{{route('trip.edit',$singleBiscuit->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('trip.delete',$singleBiscuit->id)}}">Delete</a>
          <a class="btn btn-success" href="">View</a>
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

