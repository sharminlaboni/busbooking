@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">time sechdule</h1> 
                <a class="btn btn-success" href="{{route('time.create')}}">Add New time</a>


    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">time</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($times as $timeinfo)
    <tr>
      <th scope="row">1</th>
      <td>{{$timeinfo->time}}</td>
      <td>
          <a class="btn btn-primary" href="{{route('time.edit',$timeinfo->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('time.delete',$timeinfo->id)}}">Delete</a>
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

