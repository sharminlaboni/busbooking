@extends('welcome')
@section('main')
<form action="{{route('time.store')}}" method="POST" >
@csrf


<div class="from-group">
        <lable for="exampleInputEmail">time</lable>
        <input name="time" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">

</div>

<button type="submit" class="btn btn-primary">submit</button>

</from>
@endsection