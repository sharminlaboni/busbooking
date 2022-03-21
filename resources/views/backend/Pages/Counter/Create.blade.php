@extends('welcome')
@section('main')
<form action="{{route('Counter.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Starting_counter</label>
      <input name="Starting_counter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">End_counter</label>
      <input name="End_counter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection