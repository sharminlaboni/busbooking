@extends('welcome')
@section('main')
<form action="{{route('trip.report')}}" >
    
    <div class="form-group">
      <label >From Date</label>
      <input name="from_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="From date">
    </div>
    <div class="form-group">
      <label> To Date</label>
      <input name="to_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="To date">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
