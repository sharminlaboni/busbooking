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
      <th scope="col"> name</th>

      <th scope="col">route name</th>

      <th scope="col">time</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($trips as $singleBiscuit)
    <tr>
      <th scope="row">{{$singleBiscuit->id}}</th>
      <td>{{$singleBiscuit->name}}</td>
      <td>{{$singleBiscuit->route->name}}</td>
      <td>{{$singleBiscuit->time}}</td>
      <td>{{$singleBiscuit->price}}</td>
      <td>
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
          <a class="btn btn-success" href="">View</a>
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

