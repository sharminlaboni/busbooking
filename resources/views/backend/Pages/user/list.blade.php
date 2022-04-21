@extends('welcome')
@section('main')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">User List</h1>

</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User_name</th>
      <th scope="col">email</th>      
      <th scope="col">Role</th>



      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  

  @foreach($users as $data)
    <tr>
      <th scope="row">1</th>     
       <td scope="row">{{$data->name}}</td>
       <td scope="row">{{$data->email}}</td>

       <td scope="row">{{$data->role}}</td>


    <td>
          <a class="btn btn-danger" href="">Delete</a> 
      </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection 
  
  

