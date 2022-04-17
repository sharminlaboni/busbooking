<div class="container">
    <h5>Update Profile</h5>
    <from action="" method="POST">
        @csrf
        <div class="form-group">
      <label>Name</label>
      <input value="{{$user->name}}"   name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input value="{{$user->email}}"   name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label >Address</label>
      <input value="{{$user->address}}"   name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label>contact</label>
      <input value="{{$user->contact}}"   name="contact" type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
   <button type="submit" class="btn btn-success">Submit</button>
    </from>
</div>