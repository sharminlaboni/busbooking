@extends('welcome')
@section('main')
<form action="{{route('Customer.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">customer_name</label>
      <input name="customername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">customer_contact</label>
      <input name="customercontact" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">customer_email</label>
      <input name="customeremail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div> 

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection