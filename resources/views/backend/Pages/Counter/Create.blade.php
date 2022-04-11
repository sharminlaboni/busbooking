@extends('welcome')
@section('main')
<form action="{{route('Counter.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">counter_name</label>
      <input name="counter_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">counter_number</label>
      <input name="counter_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
      <div class="form-group">
      <label for="location">Location</label>
       <select class="form-control" name="location_id" id="">
            @foreach($locations as $singleLocation)
            <option value="{{$singleLocation->id}}">{{$singleLocation->Location_name}}</option>
            @endforeach
        </select>
      </div> 
      
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection