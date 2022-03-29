@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Route</h1>

</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> name</th>
      <th scope="col">details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($routes as $singleBiscuit)
    <tr>
      <th scope="row">1</th>
      <td>{{$singleBiscuit->name}}</td>
      <td>{{$singleBiscuit->details}}</td>
      <td>
          <a class="btn btn-primary" href="{{route('route.edit',$singleBiscuit->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('route.delete',$singleBiscuit->id)}}">Delete</a>
          <!-- <a class="btn btn-success" href="">View</a> -->
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

