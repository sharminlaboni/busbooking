@extends('welcome')

@section('main')
<form action="{{route('trip.store')}}" method="POST" encType="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="Bus">Bus</label>
      
        <select class="form-control" name="Bus_id" id="">
            @foreach($buses as $singlebus)
            <option value="{{$singlebus->id}}">{{$singlebus->Bus_name}}</option>
            @endforeach
        </select>
</div> 
      <div class="form-group"> 
        <label for="route">route</label> 
         <select class="form-control" name="route_id" id=""> 
             @foreach($routes as $singleBiscuit) 
            <option value="{{$singleBiscuit->id}}">{{$singleBiscuit->name}}</option> 
            @endforeach 
         </select> 
        </div> 
    <!-- <div class="form-group"> -->
      <!-- <label for="exampleInputPassword1">route_name</label> -->
      <!-- <input name="route_name" type="number" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
    <!-- </div> -->
    
    <div class="form-group">
      <label for="exampleInputPassword1">time</label>
      <input name="time" type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Details</label>
        <input name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      

      

      
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection