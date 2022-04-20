@extends('welcome')
@section('main')
<form action="{{route('driver.store')}}" method="POST">
@method('put')
    @csrf    
 <input type="hidden" value="{{$drivers->id}}" name="id">


    <div class="form-group">
      <label for="exampleInputEmail1">Driver_name</label>
      <input name="Driver_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Driver_id</label>
      <input name="Driver_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Driver_phone</label>
      <input name="Driver_phone" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Bus_name</label>
      <input name="Bus_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div><div class="form-group">
      <label for="exampleInputEmail1">Bus_type</label>
      <input name="Bus_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    
      
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection