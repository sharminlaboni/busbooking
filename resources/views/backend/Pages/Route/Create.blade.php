@extends('welcome')
@section('main')
<form action="{{route('route.post')}}" method="POST" >
@csrf


<div class="from-group">
        <lable for="exampleInputEmail"> Route name</lable>
        <input name="Route_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">

</div>
<div class="from-group">
        <lable for="exampleInputEmail">Details</lable>
        <input name="Route_details" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">
        
</div>
<button type="submit" class="btn btn-primary">submit</button>
<a href="{{route('admin.route.show')}}" class="btn btn-primary">List here</a>
</from>
@endsection