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
      

      <th scope="col">busname</th>
      <th scope="col">seatname</th>
      <th scope="col">time</th>
      <th scope="col">date</th>
      <th scope="col">user</th>
      <th scope="col">Amount</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($books as $singleBiscuit)
    <tr>
      <th scope="row">1</th>
      

      <td>{{$singleBiscuit->busname}}</td>
      <td>{{$singleBiscuit->seatname}}</td>
      <td>{{$singleBiscuit->time}}</td>
      <td>{{$singleBiscuit->date}}</td>
      <td>{{$singleBiscuit->user}}</td>
      <td>{{$singleBiscuit->Amount}}</td>
      <td>{{$singleBiscuit->status}}</td>
      


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
  
  

