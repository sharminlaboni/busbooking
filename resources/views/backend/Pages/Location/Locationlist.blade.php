@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Location</h1>
                <a class="btn btn-success" href="{{route('location.create')}}">Add New LocationDelete</a>

</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Location_name</th>
    
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($locations as $singleLocation)
    <tr>
      <th scope="row">1</th>
      <td>{{$singleLocation->Location_name}}</td>
      
      <td>
          <a class="btn btn-primary" href="{{route('location.edit',$singleLocation->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('location.delete',$singleLocation->id)}}">Delete</a>
          <!-- <a class="btn btn-success" href="">View</a> -->
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

