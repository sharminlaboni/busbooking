@extends('welcome')
@section('main')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Payment</h1>
                

</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Payment Mathod</th>
      <th scope="col">Transection ID</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>
  

  @foreach($payment as $key => $booking)
    <tr>
      <th scope="row">1</th>
      <td>{{optional($booking->userRelation)->name}}</td>
      <td>{{optional($booking->userRelation)->email}}</td>
      <td>{{$booking->payment_mathod}}</td>
      <td>{{$booking->transaction_id}}</td>
      <td>{{($booking->created_at)->toDateString()}}</td>
      <td>{{$booking->amount}}</td>
      

    </tr>
    @endforeach
    </tbody>
</table>
@endsection
















@endsection