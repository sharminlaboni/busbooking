@extends('welcome')
@section('main')
<form action="{{route('route.post')}}" method="POST" >
@csrf


<div class="from-group">
        <lable for="exampleInputEmail">From_location_name</lable>
        <select class="form-control" name="From_Location_id" id="">
            @foreach($locations as $singleLocation)
            <option value="{{$singleLocation->id}}">{{$singleLocation->Location_name}}</option>
            @endforeach
        </select>


</div>
<div class="from-group">
        <lable for="exampleInputEmail">To_location_name</lable>
        <select class="form-control" name="To_Location_id" id="">
            @foreach($locations as $singleLocation)
            <option value="{{$singleLocation->id}}">{{$singleLocation->Location_name}}</option>
            @endforeach
        </select>


        
</div>
<button type="submit" class="btn btn-primary">submit</button>
<a href="{{route('admin.route.show')}}" class="btn btn-primary">List here</a>
</from>
@endsection