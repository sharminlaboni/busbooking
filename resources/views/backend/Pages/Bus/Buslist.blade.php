@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Bus</h1>
                <a class="btn btn-success" href="{{route('Bus.create')}}">Add New Bus</a>


</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bus_name</th>
      <th scope="col">Bus_number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($buses as $singlebus)
    <tr>
      <th scope="row">1</th>
      <td>{{$singlebus->Bus_name}}</td>
      <td>{{$singlebus->Bus_number}}</td>
      <td>
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
          
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

