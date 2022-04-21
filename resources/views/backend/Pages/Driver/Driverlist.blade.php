@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Driver</h1>               
           <a class="btn btn-success" href="{{route('driver.create')}}">Add New Driver</a>



</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Driver_name</th>
      <th scope="col">Driver_id</th>
      <th scope="col">Drive_phone</th>
      <th scope="col">Bus_name</th>
      <th scope="col">Bus_type</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>
  

  @foreach($drivers as $singledriver)
    <tr>
      <th scope="row">{{$singledriver->id}}</th>
      <td>{{$singledriver->Driver_name}}</td>
      <td>{{$singledriver->Driver_id}}</td> 
      <td>{{$singledriver->Driver_phone}}</td>
      <td>{{$singledriver->Bus_name}}</td>      
      <td>{{$singledriver->Bus_type}}</td> 
      <td>
          <a class="btn btn-primary" href="{{route('driver.edit',$singledriver->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('driver.delete',$singledriver->id)}}">Delete</a>
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

