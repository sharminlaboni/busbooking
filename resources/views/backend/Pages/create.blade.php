@extends('master')
@section('main')
<form action="{{route('trip.post')}}"method="POST">
    @csrf
    <div class="from-group">
        <lable for="exampleInputEmail">Trip name</lable>
        <input name="Trip_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">

</div>
<div class="from-group">
        <lable for="exampleInputEmail">Details</lable>
        <input name="Trip_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">
        
</div>
<button type="submit" class="btn btn-primary">submit</button>
</from>
@endsection