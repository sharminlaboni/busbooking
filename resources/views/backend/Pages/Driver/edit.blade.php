@extends('welcome')
@section('main')
<form action="{{route('driver.update')}}" method="POST">
@method('put')

    @csrf    
 <input type="hidden" value="{{$drivers->id}}" name="driver_id">


    <div class="form-group">
      <label >Driver_name</label>
      <input name="Driver_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Driver name">
    </div>
    <div class="form-group">
      <label >Driver_id</label>
      <input name="Driver_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Driver id">
    </div>
    <div class="form-group">
      <label >Driver_phone</label>
      <input name="Driver_phone" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Driver phone">
    </div>
    <div class="form-group">
      <label >Bus_name</label>
      <input name="Bus_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bus name">
    </div><div class="form-group">
      <label >Bus_type</label>
      <input name="Bus_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bus type">
    </div>

    
      
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection