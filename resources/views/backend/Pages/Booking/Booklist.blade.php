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
      <th scope="col">seat name</th>
      <th scope="col">counter</th>
      <th scope="col">Total amount</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
  

  @foreach($books as $singlebook)
    <tr>
      <th scope="row">1</th>
      

      <td>{{$singlebook->name}}</td>
      <td>{{$singlebook->email}}</td>
      <td>{{$singlebook->seat name}}</td>

      <td>{{$singlebook->time}}</td>
      <td>{{$singlebook->date}}</td>
      <td>{{$singlebook>counter}}</td>
      <td>{{$singleBiscuit->TotalAmount}}</td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

