@extends('welcome')
@section('main')
<form action="{{route('Bus.store')}}" method="POST" >
@csrf


<div class="from-group">
        <lable>Bus_name</lable>
        <input name="Bus_name" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Enter Bus name">

</div>
<div class="from-group">
        <lable>Bus_number</lable>
        <input name="Bus_number" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Enter Bus number">
        
</div>
<div class="from-group">
        <lable>Bus_type</lable>
        <input name="Bus_type" type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Enter Bus type">
        
</div>
<button type="submit" class="btn btn-primary">submit</button>

</from>
@endsection