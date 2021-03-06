@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">View customer</h1>

    <a class="btn btn-success" href="{{route('Customer.create')}}">Add New Customer</a>

            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($customers as $singleBiscuit)
    <tr>
      <th scope="row">1</th>
      <td>{{$singleBiscuit->name}}</td>
      <td>{{$singleBiscuit->password}}</td>
      <td>{{$singleBiscuit->email}}</td>
      <td>
          <a class="btn btn-primary" href="{{route('Customer.edit',$singleBiscuit->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('Customer.delete',$singleBiscuit->id)}}">Delete</a>
          
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

