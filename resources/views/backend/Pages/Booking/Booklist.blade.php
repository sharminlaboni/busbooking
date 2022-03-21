@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Booking</h1>

    <a class="btn btn-success" href="{{route('Booking.create')}}">Create New Booking</a>

            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PNR</th>

      <th scope="col">busname</th>
      <th scope="col">startingfrom</th>
      <th scope="col">destination</th>
      <th scope="col">date</th>
      <th scope="col">customername</th>
      <th scope="col">customercontact</th>
      <th scope="col">customeraddress</th>
      <th scope="col">payment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($books as $singleBiscuit)
    <tr>
      <th scope="row">1</th>
      <td>{{$singleBiscuit->PNR}}</td>

      <td>{{$singleBiscuit->busname}}</td>
      <td>{{$singleBiscuit->startingfrom}}</td>
      <td>{{$singleBiscuit->destination}}</td>
      <td>{{$singleBiscuit->date}}</td>
      <td>{{$singleBiscuit->customername}}</td>
      <td>{{$singleBiscuit->customercontact}}</td>
      <td>{{$singleBiscuit->customeraddress}}</td>
      <td>{{$singleBiscuit->payment}}</td>


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
  
  

