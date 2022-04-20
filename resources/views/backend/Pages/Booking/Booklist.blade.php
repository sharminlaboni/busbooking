@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Booking</h1>
</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      

      <th scope="col">customer name</th>
      <th scope="col">customer email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">seat number</th>
      <th scope="col">date</th>
      <th scope="col">counter</th>
      <th scope="col">Status</th>
      <th scope="col">Total amount</th>
      
      
    </tr>
  </thead>
  <tbody>
  

  @foreach($booking as $singlebook)
    <tr>
      <th scope="row">1</th>
      <td>{{$singlebook->user->name}}</td>
      <td>{{$singlebook->user->email}}</td>
      <td>{{$singlebook->user->address}}</td>
      <td>{{$singlebook->user->contact}}</td>
        <td>{{$singlebook->seat_number}}</td>
      <td>{{$singlebook->date}}</td>
      <td>{{$singlebook->counter->counter_name}}</td>
      <td>{{$singlebook->booking_status}}</td>

      <td>{{$singlebook->totalAmount}}</td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

