
 <!-- <style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
} 

 .profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer 
 }

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
} 
</style> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
</head>

<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span<span class="font-weight-bold">{{$user->name}}</span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">My Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder=" enter name" value="{{$user->name}}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email " value="{{$user->email}}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">contact</label><input type="integer" class="form-control" placeholder="enter contact " value="{{$user->contact}}"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter Address " value="{{$user->address}}"></div>
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels"></label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Update Profile</button></div> -->
            </div>
        </div>
        <div class="col-md-4">
            
        </div>
    </div>
</div>
</div>
</div>
<table class="table table-striped table-bordered table-hover">
    <h3 class="text-center">My Booking</h3>
    <thead>
    <tr>
       <th scope="col">Name</th> 
      <th scope="col">Email</th>
      <th></th>
      <th scope="col">seat name </th>  
      <th></th>   
       <th scope="col">Counter</th>
       
       <th></th>
        <th scope="col">date</th> 
        <th></th>

     <th scope="col">Total amount</th>      
      <!-- <th scope="col">Action</th>   -->
    </tr>
  </thead>
  <tbody> 
  @foreach($booking as $info) 
    <tr>
    
      <td>{{$info->user->name}}</td>
      <td>{{$info->user->email}}</td> 
      <td></td>
      <td>{{$info->seat_number}}</td>
      <td></td>
      <td>{{$info->counter->counter_name}}</td>
      <td></td>

      <td>{{$info->date}}</td>
      <td></td>
     <td>{{$info->totalAmount}}</td>
  
</tr>

@endforeach
</tbody> 
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>

