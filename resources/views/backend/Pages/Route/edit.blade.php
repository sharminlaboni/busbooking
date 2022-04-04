@extends('welcome')
@section('main')
<form action="{{route('route.update')}}" method="POST" >
    @method('put') 
    <input type="hidden" value="{{$routes->id}}" name="route_id">

@csrf


<div class="from-group">
        <lable for="exampleInputEmail">From_location_name</lable>
        <input name="From_location_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">

</div>
<div class="from-group">
        <lable for="exampleInputEmail">To_location_name</lable>
        <input name="To_location_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">
        
</div>
<button type="submit" class="btn btn-primary">submit</button>
<a href="{{route('admin.route.show')}}" class="btn btn-primary">List here</a>
</from>
@endsection