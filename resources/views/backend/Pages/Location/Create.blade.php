@extends('welcome')
@section('main')
<form action="{{route('location.store')}}" method="POST" >

    @csrf
    


<div class="from-group">
        <lable for="exampleInputEmail"> Location_name</lable>
        <input name="Location_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Details">

</div>

<button type="submit" class="btn btn-primary">submit</button>
<a href="{{route('admin.location.show')}}" class="btn btn-primary">List here</a>
</from>
@endsection