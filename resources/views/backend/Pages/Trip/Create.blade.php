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
      <label for="exampleInputPassword1">bus_type</label>
      <input required name="bus_type" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

      <div class="form-group"> 
        <label for="route">route</label> 
         <select class="form-control" name="route_id" id=""> 
             @foreach($routes as $singleBiscuit) 
            <option value="{{$singleBiscuit->id}}">{{$singleBiscuit->fromLocation->Location_name}} - {{$singleBiscuit->toLocation->Location_name}}</option> 
            @endforeach 
         </select> 
        </div> 
        <div class="form-group">
        <label for="exampleInputEmail1">date</label>
        <input required name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
   
    <div class="form-group">
      <label for="exampleInputPassword1">time</label>
      <select class="form-control" name="time_id" id="">
            @foreach($times as $timeinfo)
            <option value="{{$timeinfo->id}}">{{$timeinfo->time}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Details</label>
        <input required name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input required name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      

      

      
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection