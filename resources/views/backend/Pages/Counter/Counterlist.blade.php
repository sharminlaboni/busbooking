@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Counter</h1>

</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Bookingcounter</th>
      <th scope="col">Dropingcounter</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($counters as $singleBiscuit)
    <tr>
      <th scope="row">1</th>
      <td>{{$singleBiscuit->Bookingcounter}}</td>
      <td>{{$singleBiscuit->Dropingcounter}}</td>
      <td>
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
          
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

