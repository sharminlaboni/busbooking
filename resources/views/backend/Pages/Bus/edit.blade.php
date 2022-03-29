@extends('welcome')
@section('main')
<form action="{{route('bus.update')}}" method="POST" >
    @method('put')
@csrf
<input type="hidden" value="{{$buses->id}}" name="Bus_id">


<div class="from-group">
        <lable for="exampleInputEmail">Bus_name</lable>
        <input name="Bus_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">

</div>
<div class="from-group">
        <lable for="exampleInputEmail">Bus_number</lable>
        <input name="Bus_number" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">
        
</div>
<button type="submit" class="btn btn-primary">submit</button>

</from>
@endsection